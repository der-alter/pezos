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

class BlockHeaderMetadataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\BlockHeaderMetadata';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\BlockHeaderMetadata';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bzzhh\Pezos\Generated\Proto\Model\BlockHeaderMetadata();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('protocol', $data)) {
            $object->setProtocol($data['protocol']);
            unset($data['protocol']);
        }
        if (\array_key_exists('next_protocol', $data)) {
            $object->setNextProtocol($data['next_protocol']);
            unset($data['next_protocol']);
        }
        if (\array_key_exists('test_chain_status', $data)) {
            $object->setTestChainStatus($data['test_chain_status']);
            unset($data['test_chain_status']);
        }
        if (\array_key_exists('max_operations_ttl', $data)) {
            $object->setMaxOperationsTtl($data['max_operations_ttl']);
            unset($data['max_operations_ttl']);
        }
        if (\array_key_exists('max_operation_data_length', $data)) {
            $object->setMaxOperationDataLength($data['max_operation_data_length']);
            unset($data['max_operation_data_length']);
        }
        if (\array_key_exists('max_block_header_length', $data)) {
            $object->setMaxBlockHeaderLength($data['max_block_header_length']);
            unset($data['max_block_header_length']);
        }
        if (\array_key_exists('max_operation_list_length', $data)) {
            $values = [];
            foreach ($data['max_operation_list_length'] as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\BlockHeaderMetadataMaxOperationListLengthItem', 'json', $context);
            }
            $object->setMaxOperationListLength($values);
            unset($data['max_operation_list_length']);
        }
        foreach ($data as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $object[$key] = $value_1;
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
        $data['protocol'] = $object->getProtocol();
        $data['next_protocol'] = $object->getNextProtocol();
        $data['test_chain_status'] = $object->getTestChainStatus();
        $data['max_operations_ttl'] = $object->getMaxOperationsTtl();
        $data['max_operation_data_length'] = $object->getMaxOperationDataLength();
        $data['max_block_header_length'] = $object->getMaxBlockHeaderLength();
        $values = [];
        foreach ($object->getMaxOperationListLength() as $value) {
            $values[] = $this->normalizer->normalize($value, 'json', $context);
        }
        $data['max_operation_list_length'] = $values;
        foreach ($object as $key => $value_1) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value_1;
            }
        }

        return $data;
    }
}
