<?php

declare(strict_types=1);

/*
 * This file has been auto generated by Jane,
 *
 * Do no edit it directly.
 */

namespace Bzzhh\Pezos\Generated\Proto\Normalizer;

use Bzzhh\Pezos\Generated\Proto\Runtime\Normalizer\CheckArray;
use Bzzhh\Pezos\Generated\Proto\Runtime\Normalizer\ValidatorTrait;
use Jane\Component\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ContextConstantsParametricGetResponse200DalParametricNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\ContextConstantsParametricGetResponse200DalParametric';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\ContextConstantsParametricGetResponse200DalParametric';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bzzhh\Pezos\Generated\Proto\Model\ContextConstantsParametricGetResponse200DalParametric();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('feature_enable', $data)) {
            $object->setFeatureEnable($data['feature_enable']);
            unset($data['feature_enable']);
        }
        if (\array_key_exists('number_of_slots', $data)) {
            $object->setNumberOfSlots($data['number_of_slots']);
            unset($data['number_of_slots']);
        }
        if (\array_key_exists('attestation_lag', $data)) {
            $object->setAttestationLag($data['attestation_lag']);
            unset($data['attestation_lag']);
        }
        if (\array_key_exists('availability_threshold', $data)) {
            $object->setAvailabilityThreshold($data['availability_threshold']);
            unset($data['availability_threshold']);
        }
        if (\array_key_exists('redundancy_factor', $data)) {
            $object->setRedundancyFactor($data['redundancy_factor']);
            unset($data['redundancy_factor']);
        }
        if (\array_key_exists('page_size', $data)) {
            $object->setPageSize($data['page_size']);
            unset($data['page_size']);
        }
        if (\array_key_exists('slot_size', $data)) {
            $object->setSlotSize($data['slot_size']);
            unset($data['slot_size']);
        }
        if (\array_key_exists('number_of_shards', $data)) {
            $object->setNumberOfShards($data['number_of_shards']);
            unset($data['number_of_shards']);
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
        $data['feature_enable'] = $object->getFeatureEnable();
        $data['number_of_slots'] = $object->getNumberOfSlots();
        $data['attestation_lag'] = $object->getAttestationLag();
        $data['availability_threshold'] = $object->getAvailabilityThreshold();
        $data['redundancy_factor'] = $object->getRedundancyFactor();
        $data['page_size'] = $object->getPageSize();
        $data['slot_size'] = $object->getSlotSize();
        $data['number_of_shards'] = $object->getNumberOfShards();
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}