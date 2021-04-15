<?php

namespace Pezos\Generated\Shell\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Pezos\Generated\Shell\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class ConfigGetResponse200P2pLimitsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200P2pLimits';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200P2pLimits';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Pezos\Generated\Shell\Model\ConfigGetResponse200P2pLimits();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('connection-timeout', $data)) {
            $object->setConnectionTimeout($data['connection-timeout']);
        }
        if (\array_key_exists('authentication-timeout', $data)) {
            $object->setAuthenticationTimeout($data['authentication-timeout']);
        }
        if (\array_key_exists('min-connections', $data)) {
            $object->setMinConnections($data['min-connections']);
        }
        if (\array_key_exists('expected-connections', $data)) {
            $object->setExpectedConnections($data['expected-connections']);
        }
        if (\array_key_exists('max-connections', $data)) {
            $object->setMaxConnections($data['max-connections']);
        }
        if (\array_key_exists('backlog', $data)) {
            $object->setBacklog($data['backlog']);
        }
        if (\array_key_exists('max-incoming-connections', $data)) {
            $object->setMaxIncomingConnections($data['max-incoming-connections']);
        }
        if (\array_key_exists('max-download-speed', $data)) {
            $object->setMaxDownloadSpeed($data['max-download-speed']);
        }
        if (\array_key_exists('max-upload-speed', $data)) {
            $object->setMaxUploadSpeed($data['max-upload-speed']);
        }
        if (\array_key_exists('swap-linger', $data)) {
            $object->setSwapLinger($data['swap-linger']);
        }
        if (\array_key_exists('binary-chunks-size', $data)) {
            $object->setBinaryChunksSize($data['binary-chunks-size']);
        }
        if (\array_key_exists('read-buffer-size', $data)) {
            $object->setReadBufferSize($data['read-buffer-size']);
        }
        if (\array_key_exists('read-queue-size', $data)) {
            $object->setReadQueueSize($data['read-queue-size']);
        }
        if (\array_key_exists('write-queue-size', $data)) {
            $object->setWriteQueueSize($data['write-queue-size']);
        }
        if (\array_key_exists('incoming-app-message-queue-size', $data)) {
            $object->setIncomingAppMessageQueueSize($data['incoming-app-message-queue-size']);
        }
        if (\array_key_exists('incoming-message-queue-size', $data)) {
            $object->setIncomingMessageQueueSize($data['incoming-message-queue-size']);
        }
        if (\array_key_exists('outgoing-message-queue-size', $data)) {
            $object->setOutgoingMessageQueueSize($data['outgoing-message-queue-size']);
        }
        if (\array_key_exists('max_known_points', $data)) {
            $values = array();
            foreach ($data['max_known_points'] as $value) {
                $values[] = $value;
            }
            $object->setMaxKnownPoints($values);
        }
        if (\array_key_exists('max_known_peer_ids', $data)) {
            $values_1 = array();
            foreach ($data['max_known_peer_ids'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setMaxKnownPeerIds($values_1);
        }
        if (\array_key_exists('greylist-timeout', $data)) {
            $object->setGreylistTimeout($data['greylist-timeout']);
        }
        if (\array_key_exists('maintenance-idle-time', $data)) {
            $object->setMaintenanceIdleTime($data['maintenance-idle-time']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getConnectionTimeout()) {
            $data['connection-timeout'] = $object->getConnectionTimeout();
        }
        if (null !== $object->getAuthenticationTimeout()) {
            $data['authentication-timeout'] = $object->getAuthenticationTimeout();
        }
        if (null !== $object->getMinConnections()) {
            $data['min-connections'] = $object->getMinConnections();
        }
        if (null !== $object->getExpectedConnections()) {
            $data['expected-connections'] = $object->getExpectedConnections();
        }
        if (null !== $object->getMaxConnections()) {
            $data['max-connections'] = $object->getMaxConnections();
        }
        if (null !== $object->getBacklog()) {
            $data['backlog'] = $object->getBacklog();
        }
        if (null !== $object->getMaxIncomingConnections()) {
            $data['max-incoming-connections'] = $object->getMaxIncomingConnections();
        }
        if (null !== $object->getMaxDownloadSpeed()) {
            $data['max-download-speed'] = $object->getMaxDownloadSpeed();
        }
        if (null !== $object->getMaxUploadSpeed()) {
            $data['max-upload-speed'] = $object->getMaxUploadSpeed();
        }
        if (null !== $object->getSwapLinger()) {
            $data['swap-linger'] = $object->getSwapLinger();
        }
        if (null !== $object->getBinaryChunksSize()) {
            $data['binary-chunks-size'] = $object->getBinaryChunksSize();
        }
        if (null !== $object->getReadBufferSize()) {
            $data['read-buffer-size'] = $object->getReadBufferSize();
        }
        if (null !== $object->getReadQueueSize()) {
            $data['read-queue-size'] = $object->getReadQueueSize();
        }
        if (null !== $object->getWriteQueueSize()) {
            $data['write-queue-size'] = $object->getWriteQueueSize();
        }
        if (null !== $object->getIncomingAppMessageQueueSize()) {
            $data['incoming-app-message-queue-size'] = $object->getIncomingAppMessageQueueSize();
        }
        if (null !== $object->getIncomingMessageQueueSize()) {
            $data['incoming-message-queue-size'] = $object->getIncomingMessageQueueSize();
        }
        if (null !== $object->getOutgoingMessageQueueSize()) {
            $data['outgoing-message-queue-size'] = $object->getOutgoingMessageQueueSize();
        }
        if (null !== $object->getMaxKnownPoints()) {
            $values = array();
            foreach ($object->getMaxKnownPoints() as $value) {
                $values[] = $value;
            }
            $data['max_known_points'] = $values;
        }
        if (null !== $object->getMaxKnownPeerIds()) {
            $values_1 = array();
            foreach ($object->getMaxKnownPeerIds() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['max_known_peer_ids'] = $values_1;
        }
        if (null !== $object->getGreylistTimeout()) {
            $data['greylist-timeout'] = $object->getGreylistTimeout();
        }
        if (null !== $object->getMaintenanceIdleTime()) {
            $data['maintenance-idle-time'] = $object->getMaintenanceIdleTime();
        }
        return $data;
    }
}