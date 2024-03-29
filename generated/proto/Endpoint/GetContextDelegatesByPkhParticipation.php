<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Proto\Endpoint;

class GetContextDelegatesByPkhParticipation extends \Bzzhh\Pezos\Generated\Proto\Runtime\Client\BaseEndpoint implements \Bzzhh\Pezos\Generated\Proto\Runtime\Client\Endpoint
{
    use \Bzzhh\Pezos\Generated\Proto\Runtime\Client\EndpointTrait;
    protected $pkh;

    /**
     * Returns cycle and level participation information. In particular this indicates, in the field 'expected_cycle_activity', the number of slots the delegate is expected to have in the cycle based on its active stake. The field 'minimal_cycle_activity' indicates the minimal endorsing slots in the cycle required to get endorsing rewards. It is computed based on 'expected_cycle_activity. The fields 'missed_slots' and 'missed_levels' indicate the number of missed endorsing slots and missed levels (for endorsing) in the cycle so far. 'missed_slots' indicates the number of missed endorsing slots in the cycle so far. The field 'remaining_allowed_missed_slots' indicates the remaining amount of endorsing slots that can be missed in the cycle before forfeiting the rewards. Finally, 'expected_endorsing_rewards' indicates the endorsing rewards that will be distributed at the end of the cycle if activity at that point will be greater than the minimal required; if the activity is already known to be below the required minimum, then the rewards are zero.
     *
     * @param string $pkh A Secp256k1 of a Ed25519 public key hash (Base58Check-encoded)
     */
    public function __construct(string $pkh)
    {
        $this->pkh = $pkh;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{pkh}'], [$this->pkh], '/context/delegates/{pkh}/participation');
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
     * @return \Bzzhh\Pezos\Generated\Proto\Model\ContextDelegatesPkhParticipationGetResponse200|null
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\ContextDelegatesPkhParticipationGetResponse200', 'json');
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
