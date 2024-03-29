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

class ConfigGetResponse200P2pGreylistingConfigNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200P2pGreylistingConfig';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200P2pGreylistingConfig';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bzzhh\Pezos\Generated\Shell\Model\ConfigGetResponse200P2pGreylistingConfig();
        if (\array_key_exists('factor', $data) && \is_int($data['factor'])) {
            $data['factor'] = (float) $data['factor'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('factor', $data)) {
            $object->setFactor($data['factor']);
            unset($data['factor']);
        }
        if (\array_key_exists('initial-delay', $data)) {
            $object->setInitialDelay($data['initial-delay']);
            unset($data['initial-delay']);
        }
        if (\array_key_exists('disconnection-delay', $data)) {
            $object->setDisconnectionDelay($data['disconnection-delay']);
            unset($data['disconnection-delay']);
        }
        if (\array_key_exists('increase-cap', $data)) {
            $object->setIncreaseCap($data['increase-cap']);
            unset($data['increase-cap']);
        }
        foreach ($data as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value;
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
        if ($object->isInitialized('factor') && null !== $object->getFactor()) {
            $data['factor'] = $object->getFactor();
        }
        if ($object->isInitialized('initialDelay') && null !== $object->getInitialDelay()) {
            $data['initial-delay'] = $object->getInitialDelay();
        }
        if ($object->isInitialized('disconnectionDelay') && null !== $object->getDisconnectionDelay()) {
            $data['disconnection-delay'] = $object->getDisconnectionDelay();
        }
        if ($object->isInitialized('increaseCap') && null !== $object->getIncreaseCap()) {
            $data['increase-cap'] = $object->getIncreaseCap();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
