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

class NetworkPeersPeerIdGetResponse200PeerMetadataPrevalidatorResultsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\NetworkPeersPeerIdGetResponse200PeerMetadataPrevalidatorResults';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Bzzhh\\Pezos\\Generated\\Shell\\Model\\NetworkPeersPeerIdGetResponse200PeerMetadataPrevalidatorResults';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
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
            unset($data['cannot_download']);
        }
        if (\array_key_exists('cannot_parse', $data)) {
            $object->setCannotParse($data['cannot_parse']);
            unset($data['cannot_parse']);
        }
        if (\array_key_exists('refused_by_prefilter', $data)) {
            $object->setRefusedByPrefilter($data['refused_by_prefilter']);
            unset($data['refused_by_prefilter']);
        }
        if (\array_key_exists('refused_by_postfilter', $data)) {
            $object->setRefusedByPostfilter($data['refused_by_postfilter']);
            unset($data['refused_by_postfilter']);
        }
        if (\array_key_exists('applied', $data)) {
            $object->setApplied($data['applied']);
            unset($data['applied']);
        }
        if (\array_key_exists('branch_delayed', $data)) {
            $object->setBranchDelayed($data['branch_delayed']);
            unset($data['branch_delayed']);
        }
        if (\array_key_exists('branch_refused', $data)) {
            $object->setBranchRefused($data['branch_refused']);
            unset($data['branch_refused']);
        }
        if (\array_key_exists('refused', $data)) {
            $object->setRefused($data['refused']);
            unset($data['refused']);
        }
        if (\array_key_exists('duplicate', $data)) {
            $object->setDuplicate($data['duplicate']);
            unset($data['duplicate']);
        }
        if (\array_key_exists('outdated', $data)) {
            $object->setOutdated($data['outdated']);
            unset($data['outdated']);
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
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
