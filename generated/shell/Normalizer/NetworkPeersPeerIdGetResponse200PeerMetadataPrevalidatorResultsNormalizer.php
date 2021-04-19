<?php

namespace Bzzhh\Pezos\Generated\Shell\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Bzzhh\Pezos\Generated\Shell\Runtime\Normalizer\CheckArray;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class NetworkPeersPeerIdGetResponse200PeerMetadataPrevalidatorResultsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\NetworkPeersPeerIdGetResponse200PeerMetadataPrevalidatorResults';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\NetworkPeersPeerIdGetResponse200PeerMetadataPrevalidatorResults';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bzzhh\Pezos\Generated\Shell\Model\NetworkPeersPeerIdGetResponse200PeerMetadataPrevalidatorResults();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cannot_download', $data)) {
            $object->setCannotDownload($data['cannot_download']);
        }
        if (\array_key_exists('cannot_parse', $data)) {
            $object->setCannotParse($data['cannot_parse']);
        }
        if (\array_key_exists('refused_by_prefilter', $data)) {
            $object->setRefusedByPrefilter($data['refused_by_prefilter']);
        }
        if (\array_key_exists('refused_by_postfilter', $data)) {
            $object->setRefusedByPostfilter($data['refused_by_postfilter']);
        }
        if (\array_key_exists('applied', $data)) {
            $object->setApplied($data['applied']);
        }
        if (\array_key_exists('branch_delayed', $data)) {
            $object->setBranchDelayed($data['branch_delayed']);
        }
        if (\array_key_exists('branch_refused', $data)) {
            $object->setBranchRefused($data['branch_refused']);
        }
        if (\array_key_exists('refused', $data)) {
            $object->setRefused($data['refused']);
        }
        if (\array_key_exists('duplicate', $data)) {
            $object->setDuplicate($data['duplicate']);
        }
        if (\array_key_exists('outdated', $data)) {
            $object->setOutdated($data['outdated']);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = array();
        $data['cannot_download'] = $object->getCannotDownload();
        $data['cannot_parse'] = $object->getCannotParse();
        $data['refused_by_prefilter'] = $object->getRefusedByPrefilter();
        $data['refused_by_postfilter'] = $object->getRefusedByPostfilter();
        $data['applied'] = $object->getApplied();
        $data['branch_delayed'] = $object->getBranchDelayed();
        $data['branch_refused'] = $object->getBranchRefused();
        $data['refused'] = $object->getRefused();
        $data['duplicate'] = $object->getDuplicate();
        $data['outdated'] = $object->getOutdated();
        return $data;
    }
}