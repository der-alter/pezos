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

class SaplingTransactionCiphertextNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    use CheckArray;
    use ValidatorTrait;

    public function supportsDenormalization($data, $type, $format = null, array $context = []): bool
    {
        return $type === 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\SaplingTransactionCiphertext';
    }

    public function supportsNormalization($data, $format = null, array $context = []): bool
    {
        return is_object($data) && get_class($data) === 'Bzzhh\\Pezos\\Generated\\Proto\\Model\\SaplingTransactionCiphertext';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (isset($data['$ref'])) {
            return new Reference($data['$ref'], $context['document-origin']);
        }
        if (isset($data['$recursiveRef'])) {
            return new Reference($data['$recursiveRef'], $context['document-origin']);
        }
        $object = new \Bzzhh\Pezos\Generated\Proto\Model\SaplingTransactionCiphertext();
        if (null === $data || false === \is_array($data)) {
            return $object;
        }
        if (\array_key_exists('cv', $data)) {
            $object->setCv($data['cv']);
            unset($data['cv']);
        }
        if (\array_key_exists('epk', $data)) {
            $object->setEpk($data['epk']);
            unset($data['epk']);
        }
        if (\array_key_exists('payload_enc', $data)) {
            $object->setPayloadEnc($data['payload_enc']);
            unset($data['payload_enc']);
        }
        if (\array_key_exists('nonce_enc', $data)) {
            $object->setNonceEnc($data['nonce_enc']);
            unset($data['nonce_enc']);
        }
        if (\array_key_exists('payload_out', $data)) {
            $object->setPayloadOut($data['payload_out']);
            unset($data['payload_out']);
        }
        if (\array_key_exists('nonce_out', $data)) {
            $object->setNonceOut($data['nonce_out']);
            unset($data['nonce_out']);
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
        $data['cv'] = $object->getCv();
        $data['epk'] = $object->getEpk();
        $data['payload_enc'] = $object->getPayloadEnc();
        $data['nonce_enc'] = $object->getNonceEnc();
        $data['payload_out'] = $object->getPayloadOut();
        $data['nonce_out'] = $object->getNonceOut();
        foreach ($object as $key => $value) {
            if (preg_match('/.*/', (string) $key)) {
                $data[$key] = $value;
            }
        }

        return $data;
    }
}
