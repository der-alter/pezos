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

class ContextSmartRollupsSmartRollupSmartRollupHashStakerPkhConflictsGetResponse200ItemNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\ContextSmartRollupsSmartRollupSmartRollupHashStakerPkhConflictsGetResponse200Item';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\ContextSmartRollupsSmartRollupSmartRollupHashStakerPkhConflictsGetResponse200Item';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bzzhh\Pezos\Generated\Proto\Model\ContextSmartRollupsSmartRollupSmartRollupHashStakerPkhConflictsGetResponse200Item();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('other', $data)) {
            $object->setOther($data['other']);
            unset($data['other']);
        }
        if (\array_key_exists('their_commitment', $data)) {
            $object->setTheirCommitment($this->denormalizer->denormalize($data['their_commitment'], 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\ContextSmartRollupsSmartRollupSmartRollupHashStakerPkhConflictsGetResponse200ItemTheirCommitment', 'json', $context));
            unset($data['their_commitment']);
        }
        if (\array_key_exists('our_commitment', $data)) {
            $object->setOurCommitment($this->denormalizer->denormalize($data['our_commitment'], 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\ContextSmartRollupsSmartRollupSmartRollupHashStakerPkhConflictsGetResponse200ItemOurCommitment', 'json', $context));
            unset($data['our_commitment']);
        }
        if (\array_key_exists('parent_commitment', $data)) {
            $object->setParentCommitment($data['parent_commitment']);
            unset($data['parent_commitment']);
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
        $data['other'] = $object->getOther();
        $data['their_commitment'] = $this->normalizer->normalize($object->getTheirCommitment(), 'json', $context);
        $data['our_commitment'] = $this->normalizer->normalize($object->getOurCommitment(), 'json', $context);
        $data['parent_commitment'] = $object->getParentCommitment();
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
