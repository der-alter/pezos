<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Proto\Endpoint;

class GetContextSmartRollupsSmartRollupBySmartRollupHashCommitmentBySmartRollupCommitmentHashStakersIndexes extends \Bzzhh\Pezos\Generated\Proto\Runtime\Client\BaseEndpoint implements \Bzzhh\Pezos\Generated\Proto\Runtime\Client\Endpoint
{
    use \Bzzhh\Pezos\Generated\Proto\Runtime\Client\EndpointTrait;
    protected $Smart_rollup_hash;
    protected $Smart_rollup_commitment_hash;

    /**
     * List of stakers indexes staking on a given commitment.
     *
     * @param string $smartRollupHash           Smart_rollup_hash (Base58Check-encoded)
     * @param string $smartRollupCommitmentHash Smart_rollup_commitment_hash (Base58Check-encoded)
     */
    public function __construct(string $smartRollupHash, string $smartRollupCommitmentHash)
    {
        $this->Smart_rollup_hash = $smartRollupHash;
        $this->Smart_rollup_commitment_hash = $smartRollupCommitmentHash;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{Smart_rollup_hash}', '{Smart_rollup_commitment_hash}'], [$this->Smart_rollup_hash, $this->Smart_rollup_commitment_hash], '/context/smart_rollups/smart_rollup/{Smart_rollup_hash}/commitment/{Smart_rollup_commitment_hash}/stakers_indexes');
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
