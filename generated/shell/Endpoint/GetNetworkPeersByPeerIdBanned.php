<?php

namespace Pezos\Generated\Shell\Endpoint;

class GetNetworkPeersByPeerIdBanned extends \Pezos\Generated\Shell\Runtime\Client\BaseEndpoint implements \Pezos\Generated\Shell\Runtime\Client\Endpoint
{
    protected $peer_id;
    /**
     * Check if a given peer is blacklisted or greylisted.
     *
     * @param string $peerId A cryptographic node identity (Base58Check-encoded)
     */
    public function __construct(string $peerId)
    {
        $this->peer_id = $peerId;
    }
    use \Pezos\Generated\Shell\Runtime\Client\EndpointTrait;
    public function getMethod() : string
    {
        return 'GET';
    }
    public function getUri() : string
    {
        return str_replace(array('{peer_id}'), array($this->peer_id), '/network/peers/{peer_id}/banned');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null) : array
    {
        return array(array(), null);
    }
    public function getExtraHeaders() : array
    {
        return array('Accept' => array('application/json'));
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return json_decode($body);
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return json_decode($body);
        }
    }
    public function getAuthenticationScopes() : array
    {
        return array();
    }
}