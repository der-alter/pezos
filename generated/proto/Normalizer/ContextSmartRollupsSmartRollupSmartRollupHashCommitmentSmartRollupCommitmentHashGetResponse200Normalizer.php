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

class ContextSmartRollupsSmartRollupSmartRollupHashCommitmentSmartRollupCommitmentHashGetResponse200Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\ContextSmartRollupsSmartRollupSmartRollupHashCommitmentSmartRollupCommitmentHashGetResponse200';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\ContextSmartRollupsSmartRollupSmartRollupHashCommitmentSmartRollupCommitmentHashGetResponse200';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bzzhh\Pezos\Generated\Proto\Model\ContextSmartRollupsSmartRollupSmartRollupHashCommitmentSmartRollupCommitmentHashGetResponse200();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('compressed_state', $data)) {
            $object->setCompressedState($data['compressed_state']);
            unset($data['compressed_state']);
        }
        if (\array_key_exists('inbox_level', $data)) {
            $object->setInboxLevel($data['inbox_level']);
            unset($data['inbox_level']);
        }
        if (\array_key_exists('predecessor', $data)) {
            $object->setPredecessor($data['predecessor']);
            unset($data['predecessor']);
        }
        if (\array_key_exists('number_of_ticks', $data)) {
            $object->setNumberOfTicks($data['number_of_ticks']);
            unset($data['number_of_ticks']);
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
        $data['compressed_state'] = $object->getCompressedState();
        $data['inbox_level'] = $object->getInboxLevel();
        $data['predecessor'] = $object->getPredecessor();
        $data['number_of_ticks'] = $object->getNumberOfTicks();
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
