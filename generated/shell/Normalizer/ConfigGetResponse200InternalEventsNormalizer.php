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
class ConfigGetResponse200InternalEventsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200InternalEvents';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Pezos\\Generated\\Shell\\Model\\ConfigGetResponse200InternalEvents';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Pezos\Generated\Shell\Model\ConfigGetResponse200InternalEvents();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('activate', $data)) {
            $values = array();
            foreach ($data['activate'] as $value) {
                $values[] = $value;
            }
            $object->setActivate($values);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        if (null !== $object->getActivate()) {
            $values = array();
            foreach ($object->getActivate() as $value) {
                $values[] = $value;
            }
            $data['activate'] = $values;
        }
        return $data;
    }
}