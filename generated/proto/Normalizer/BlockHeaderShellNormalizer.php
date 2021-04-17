<?php

namespace Pezos\Generated\Proto\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Pezos\Generated\Proto\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class BlockHeaderShellNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Pezos\\Generated\\Proto\\Model\\BlockHeaderShell';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Pezos\\Generated\\Proto\\Model\\BlockHeaderShell';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Pezos\Generated\Proto\Model\BlockHeaderShell();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('level', $data)) {
            $object->setLevel($data['level']);
        }
        if (\array_key_exists('proto', $data)) {
            $object->setProto($data['proto']);
        }
        if (\array_key_exists('predecessor', $data)) {
            $object->setPredecessor($data['predecessor']);
        }
        if (\array_key_exists('timestamp', $data)) {
            $object->setTimestamp($data['timestamp']);
        }
        if (\array_key_exists('validation_pass', $data)) {
            $object->setValidationPass($data['validation_pass']);
        }
        if (\array_key_exists('operations_hash', $data)) {
            $object->setOperationsHash($data['operations_hash']);
        }
        if (\array_key_exists('fitness', $data)) {
            $values = array();
            foreach ($data['fitness'] as $value) {
                $values[] = $value;
            }
            $object->setFitness($values);
        }
        if (\array_key_exists('context', $data)) {
            $object->setContext($data['context']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['level'] = $object->getLevel();
        $data['proto'] = $object->getProto();
        $data['predecessor'] = $object->getPredecessor();
        $data['timestamp'] = $object->getTimestamp();
        $data['validation_pass'] = $object->getValidationPass();
        $data['operations_hash'] = $object->getOperationsHash();
        $values = array();
        foreach ($object->getFitness() as $value) {
            $values[] = $value;
        }
        $data['fitness'] = $values;
        $data['context'] = $object->getContext();
        return $data;
    }
}