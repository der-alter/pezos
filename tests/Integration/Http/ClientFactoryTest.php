<?php

declare(strict_types=1);

namespace Bzzhh\Pezos\Tests\Integration\Rpc;

use Bzzhh\Pezos\Generated\Mempool\Client as MempoolClient;
use Bzzhh\Pezos\Generated\Proto\Client as ProtoClient;
use Bzzhh\Pezos\Generated\Proto\Model\ContextConstantsGetResponse200;
use Bzzhh\Pezos\Generated\Shell\Client as ShellClient;
use Bzzhh\Pezos\Generated\Shell\Model\ChainsChainIdIsBootstrappedGetResponse200;
use Bzzhh\Pezos\Http\ClientFactory;
use PHPUnit\Framework\TestCase;

class ClientFactoryTest extends TestCase
{
    private ShellClient $shellClient;
    private ProtoClient $protoClient;
    private MempoolClient $mempoolClient;

    public function setUp(): void
    {
        $this->shellClient = ClientFactory::createShell($_ENV['NODE_URL']);
        $this->protoClient = ClientFactory::createProto(
            $_ENV['NODE_URL'],
            '/chains/main/blocks/head',
        );
        $this->mempoolClient = ClientFactory::createMempool(
            $_ENV['NODE_URL'],
            '/chains/main/mempool',
        );
    }

    public function testBoostrapped(): void
    {
        $response = $this->shellClient->getChainsByChainIdIsBootstrapped(
            'main',
        );

        self::assertInstanceOf(
            ChainsChainIdIsBootstrappedGetResponse200::class,
            $response,
        );
        self::assertTrue($response->getBootstrapped());
        self::assertSame('synced', $response->getSyncState());
    }

    public function testConstants(): void
    {
        $response = $this->protoClient->getContextConstant();

        self::assertInstanceOf(
            ContextConstantsGetResponse200::class,
            $response,
        );
    }
}
