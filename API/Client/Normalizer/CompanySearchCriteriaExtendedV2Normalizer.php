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

class CompanySearchCriteriaExtendedV2Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ConnectHolland\\KvkApiBundle\\API\\Client\\Model\\CompanySearchCriteriaExtendedV2';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \ConnectHolland\KvkApiBundle\API\Client\Model\CompanySearchCriteriaExtendedV2;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \ConnectHolland\KvkApiBundle\API\Client\Model\CompanySearchCriteriaExtendedV2();
        if (property_exists($data, 'kvkNumber')) {
            $object->setKvkNumber($data->{'kvkNumber'});
        }
        if (property_exists($data, 'branchNumber')) {
            $object->setBranchNumber($data->{'branchNumber'});
        }
        if (property_exists($data, 'rsin')) {
            $object->setRsin($data->{'rsin'});
        }
        if (property_exists($data, 'includeInactiveRegistrations')) {
            $object->setIncludeInactiveRegistrations($data->{'includeInactiveRegistrations'});
        }
        if (property_exists($data, 'restrictToMainBranch')) {
            $object->setRestrictToMainBranch($data->{'restrictToMainBranch'});
        }
        if (property_exists($data, 'isValid')) {
            $object->setIsValid($data->{'isValid'});
        }
        if (property_exists($data, 'site')) {
            $object->setSite($data->{'site'});
        }
        if (property_exists($data, 'context')) {
            $object->setContext($data->{'context'});
        }
        if (property_exists($data, 'q')) {
            $object->setQ($data->{'q'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if (null !== $object->getKvkNumber()) {
            $data->{'kvkNumber'} = $object->getKvkNumber();
        }
        if (null !== $object->getBranchNumber()) {
            $data->{'branchNumber'} = $object->getBranchNumber();
        }
        if (null !== $object->getRsin()) {
            $data->{'rsin'} = $object->getRsin();
        }
        if (null !== $object->getIncludeInactiveRegistrations()) {
            $data->{'includeInactiveRegistrations'} = $object->getIncludeInactiveRegistrations();
        }
        if (null !== $object->getRestrictToMainBranch()) {
            $data->{'restrictToMainBranch'} = $object->getRestrictToMainBranch();
        }
        if (null !== $object->getIsValid()) {
            $data->{'isValid'} = $object->getIsValid();
        }
        if (null !== $object->getSite()) {
            $data->{'site'} = $object->getSite();
        }
        if (null !== $object->getContext()) {
            $data->{'context'} = $object->getContext();
        }
        if (null !== $object->getQ()) {
            $data->{'q'} = $object->getQ();
        }

        return $data;
    }
}
