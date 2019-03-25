<?php

declare(strict_types=1);

/*
 * This file is part of the ConnectHolland KvkApiBundle package.
 * (c) Connect Holland.
 */

namespace ConnectHolland\KvkApiBundle\API\Client\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class CompanySearchV2AddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ConnectHolland\\KvkApiBundle\\API\\Client\\Model\\CompanySearchV2Address';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \ConnectHolland\KvkApiBundle\API\Client\Model\CompanySearchV2Address;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \ConnectHolland\KvkApiBundle\API\Client\Model\CompanySearchV2Address();
        if (property_exists($data, 'type')) {
            $object->setType($data->{'type'});
        }
        if (property_exists($data, 'street')) {
            $object->setStreet($data->{'street'});
        }
        if (property_exists($data, 'houseNumber')) {
            $object->setHouseNumber($data->{'houseNumber'});
        }
        if (property_exists($data, 'houseNumberAddition')) {
            $object->setHouseNumberAddition($data->{'houseNumberAddition'});
        }
        if (property_exists($data, 'postalCode')) {
            $object->setPostalCode($data->{'postalCode'});
        }
        if (property_exists($data, 'city')) {
            $object->setCity($data->{'city'});
        }
        if (property_exists($data, 'country')) {
            $object->setCountry($data->{'country'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getStreet()) {
            $data->{'street'} = $object->getStreet();
        }
        if (null !== $object->getHouseNumber()) {
            $data->{'houseNumber'} = $object->getHouseNumber();
        }
        if (null !== $object->getHouseNumberAddition()) {
            $data->{'houseNumberAddition'} = $object->getHouseNumberAddition();
        }
        if (null !== $object->getPostalCode()) {
            $data->{'postalCode'} = $object->getPostalCode();
        }
        if (null !== $object->getCity()) {
            $data->{'city'} = $object->getCity();
        }
        if (null !== $object->getCountry()) {
            $data->{'country'} = $object->getCountry();
        }

        return $data;
    }
}
