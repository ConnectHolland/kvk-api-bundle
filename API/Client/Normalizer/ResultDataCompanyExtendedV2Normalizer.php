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

class ResultDataCompanyExtendedV2Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ConnectHolland\\KvkApiBundle\\API\\Client\\Model\\ResultDataCompanyExtendedV2';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \ConnectHolland\KvkApiBundle\API\Client\Model\ResultDataCompanyExtendedV2;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \ConnectHolland\KvkApiBundle\API\Client\Model\ResultDataCompanyExtendedV2();
        if (property_exists($data, 'itemsPerPage')) {
            $object->setItemsPerPage($data->{'itemsPerPage'});
        }
        if (property_exists($data, 'startPage')) {
            $object->setStartPage($data->{'startPage'});
        }
        if (property_exists($data, 'totalItems')) {
            $object->setTotalItems($data->{'totalItems'});
        }
        if (property_exists($data, 'nextLink')) {
            $object->setNextLink($data->{'nextLink'});
        }
        if (property_exists($data, 'previousLink')) {
            $object->setPreviousLink($data->{'previousLink'});
        }
        if (property_exists($data, 'query')) {
            $object->setQuery($data->{'query'});
        }
        if (property_exists($data, 'items')) {
            $values = [];
            foreach ($data->{'items'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'ConnectHolland\\KvkApiBundle\\API\\Client\\Model\\CompanyExtendedV2', 'json', $context);
            }
            $object->setItems($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getItemsPerPage()) {
            $data->{'itemsPerPage'} = $object->getItemsPerPage();
        }
        if (null !== $object->getStartPage()) {
            $data->{'startPage'} = $object->getStartPage();
        }
        if (null !== $object->getTotalItems()) {
            $data->{'totalItems'} = $object->getTotalItems();
        }
        if (null !== $object->getNextLink()) {
            $data->{'nextLink'} = $object->getNextLink();
        }
        if (null !== $object->getPreviousLink()) {
            $data->{'previousLink'} = $object->getPreviousLink();
        }
        if (null !== $object->getQuery()) {
            $data->{'query'} = $object->getQuery();
        }
        if (null !== $object->getItems()) {
            $values = [];
            foreach ($object->getItems() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'items'} = $values;
        }

        return $data;
    }
}
