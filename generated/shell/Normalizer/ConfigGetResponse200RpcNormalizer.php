<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Shell\Normalizer;

use Bzzhh\Pezos\Generated\Shell\Runtime\Normalizer\CheckArray;
use Bzzhh\Pezos\Generated\Shell\Runtime\Normalizer\ValidatorTrait;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ConfigGetResponse200RpcNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200Rpc';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200Rpc';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bzzhh\Pezos\Generated\Shell\Model\ConfigGetResponse200Rpc();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('listen-addrs', $data)) {
            $values = [];
            foreach ($data['listen-addrs'] as $value) {
                $values[] = $value;
            }
            $object->setListenAddrs($values);
            unset($data['listen-addrs']);
        }
        if (\array_key_exists('listen-addr', $data)) {
            $object->setListenAddr($data['listen-addr']);
            unset($data['listen-addr']);
        }
        if (\array_key_exists('cors-origin', $data)) {
            $values_1 = [];
            foreach ($data['cors-origin'] as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setCorsOrigin($values_1);
            unset($data['cors-origin']);
        }
        if (\array_key_exists('cors-headers', $data)) {
            $values_2 = [];
            foreach ($data['cors-headers'] as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setCorsHeaders($values_2);
            unset($data['cors-headers']);
        }
        if (\array_key_exists('crt', $data)) {
            $object->setCrt($data['crt']);
            unset($data['crt']);
        }
        if (\array_key_exists('key', $data)) {
            $object->setKey($data['key']);
            unset($data['key']);
        }
        if (\array_key_exists('acl', $data)) {
            $values_3 = [];
            foreach ($data['acl'] as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setAcl($values_3);
            unset($data['acl']);
        }
        if (\array_key_exists('media-type', $data)) {
            $object->setMediaType($data['media-type']);
            unset($data['media-type']);
        }
        foreach ($data as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_4;
            }
        }

        return $object;
    }

    /**
     * @return array|string|int|float|bool|\ArrayObject|null
     */
    public function normalize($object, $format = null, array $context = [])
    {
        $data = [];
        if ($object->isInitialized('listenAddrs') && null !== $object->getListenAddrs()) {
            $values = [];
            foreach ($object->getListenAddrs() as $value) {
                $values[] = $value;
            }
            $data['listen-addrs'] = $values;
        }
        if ($object->isInitialized('listenAddr') && null !== $object->getListenAddr()) {
            $data['listen-addr'] = $object->getListenAddr();
        }
        if ($object->isInitialized('corsOrigin') && null !== $object->getCorsOrigin()) {
            $values_1 = [];
            foreach ($object->getCorsOrigin() as $value_1) {
                $values_1[] = $value_1;
            }
            $data['cors-origin'] = $values_1;
        }
        if ($object->isInitialized('corsHeaders') && null !== $object->getCorsHeaders()) {
            $values_2 = [];
            foreach ($object->getCorsHeaders() as $value_2) {
                $values_2[] = $value_2;
            }
            $data['cors-headers'] = $values_2;
        }
        if ($object->isInitialized('crt') && null !== $object->getCrt()) {
            $data['crt'] = $object->getCrt();
        }
        if ($object->isInitialized('key') && null !== $object->getKey()) {
            $data['key'] = $object->getKey();
        }
        if ($object->isInitialized('acl') && null !== $object->getAcl()) {
            $values_3 = [];
            foreach ($object->getAcl() as $value_3) {
                $values_3[] = $value_3;
            }
            $data['acl'] = $values_3;
        }
        if ($object->isInitialized('mediaType') && null !== $object->getMediaType()) {
            $data['media-type'] = $object->getMediaType();
        }
        foreach ($object as $key => $value_4) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_4;
            }
        }

        return $data;
    }
}
