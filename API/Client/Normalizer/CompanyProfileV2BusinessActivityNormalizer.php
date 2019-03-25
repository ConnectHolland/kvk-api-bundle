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

class CompanyProfileV2BusinessActivityNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ConnectHolland\\KvkApiBundle\\API\\Client\\Model\\CompanyProfileV2BusinessActivity';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \ConnectHolland\KvkApiBundle\API\Client\Model\CompanyProfileV2BusinessActivity;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \ConnectHolland\KvkApiBundle\API\Client\Model\CompanyProfileV2BusinessActivity();
        if (property_exists($data, 'sbiCode')) {
            $object->setSbiCode($data->{'sbiCode'});
        }
        if (property_exists($data, 'sbiCodeDescription')) {
            $object->setSbiCodeDescription($data->{'sbiCodeDescription'});
        }
        if (property_exists($data, 'isMainSbi')) {
            $object->setIsMainSbi($data->{'isMainSbi'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getSbiCode()) {
            $data->{'sbiCode'} = $object->getSbiCode();
        }
        if (null !== $object->getSbiCodeDescription()) {
            $data->{'sbiCodeDescription'} = $object->getSbiCodeDescription();
        }
        if (null !== $object->getIsMainSbi()) {
            $data->{'isMainSbi'} = $object->getIsMainSbi();
        }

        return $data;
    }
}
