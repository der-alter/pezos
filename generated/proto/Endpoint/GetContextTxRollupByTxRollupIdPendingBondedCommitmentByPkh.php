<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Proto\Endpoint;

class GetContextTxRollupByTxRollupIdPendingBondedCommitmentByPkh extends \Bzzhh\Pezos\Generated\Proto\Runtime\Client\BaseEndpoint implements \Bzzhh\Pezos\Generated\Proto\Runtime\Client\Endpoint
{
    use \Bzzhh\Pezos\Generated\Proto\Runtime\Client\EndpointTrait;
    protected $tx_rollup_id;
    protected $pkh;

    /**
     * Get the number of pending bonded commitments for a pkh on a rollup.
     *
     * @param string $txRollupId a tx rollup identifier encoded in b58check
     * @param string $pkh        A Secp256k1 of a Ed25519 public key hash (Base58Check-encoded)
     */
    public function __construct(string $txRollupId, string $pkh)
    {
        $this->tx_rollup_id = $txRollupId;
        $this->pkh = $pkh;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{tx_rollup_id}', '{pkh}'], [$this->tx_rollup_id, $this->pkh], '/context/tx_rollup/{tx_rollup_id}/pending_bonded_commitments/{pkh}');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    /**
     * @return null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return json_decode($body);
        }
    }

    public function getAuthenticationScopes(): array
    {
        return [];
    }
}
