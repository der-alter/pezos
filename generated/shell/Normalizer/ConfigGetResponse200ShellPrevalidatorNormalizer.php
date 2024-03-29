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

class ConfigGetResponse200ShellPrevalidatorNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200ShellPrevalidator';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200ShellPrevalidator';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bzzhh\Pezos\Generated\Shell\Model\ConfigGetResponse200ShellPrevalidator();
        if (\array_key_exists('operations_request_timeout', $data) && \is_int($data['operations_request_timeout'])) {
            $data['operations_request_timeout'] = (float) $data['operations_request_timeout'];
        }
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('operations_request_timeout', $data)) {
            $object->setOperationsRequestTimeout($data['operations_request_timeout']);
            unset($data['operations_request_timeout']);
        }
        if (\array_key_exists('max_refused_operations', $data)) {
            $object->setMaxRefusedOperations($data['max_refused_operations']);
            unset($data['max_refused_operations']);
        }
        if (\array_key_exists('operations_batch_size', $data)) {
            $object->setOperationsBatchSize($data['operations_batch_size']);
            unset($data['operations_batch_size']);
        }
        if (\array_key_exists('disable_precheck', $data)) {
            $object->setDisablePrecheck($data['disable_precheck']);
            unset($data['disable_precheck']);
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
        if ($object->isInitialized('operationsRequestTimeout') && null !== $object->getOperationsRequestTimeout()) {
            $data['operations_request_timeout'] = $object->getOperationsRequestTimeout();
        }
        if ($object->isInitialized('maxRefusedOperations') && null !== $object->getMaxRefusedOperations()) {
            $data['max_refused_operations'] = $object->getMaxRefusedOperations();
        }
        if ($object->isInitialized('operationsBatchSize') && null !== $object->getOperationsBatchSize()) {
            $data['operations_batch_size'] = $object->getOperationsBatchSize();
        }
        if ($object->isInitialized('disablePrecheck') && null !== $object->getDisablePrecheck()) {
            $data['disable_precheck'] = $object->getDisablePrecheck();
        }
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
