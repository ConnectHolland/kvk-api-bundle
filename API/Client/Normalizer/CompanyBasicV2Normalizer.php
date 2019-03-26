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

class CompanyBasicV2Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ConnectHolland\\KvkApiBundle\\API\\Client\\Model\\CompanyBasicV2';
    }

    public function supportsNormalization($data, $format = null)
    {
        return $data instanceof \ConnectHolland\KvkApiBundle\API\Client\Model\CompanyBasicV2;
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \ConnectHolland\KvkApiBundle\API\Client\Model\CompanyBasicV2();
        if (property_exists($data, 'kvkNumber')) {
            $object->setKvkNumber($data->{'kvkNumber'});
        }
        if (property_exists($data, 'branchNumber')) {
            $object->setBranchNumber($data->{'branchNumber'});
        }
        if (property_exists($data, 'rsin')) {
            $object->setRsin($data->{'rsin'});
        }
        if (property_exists($data, 'tradeNames')) {
            $object->setTradeNames($this->denormalizer->denormalize($data->{'tradeNames'}, 'ConnectHolland\\KvkApiBundle\\API\\Client\\Model\\CompanySearchV2TradeNames', 'json', $context));
        }
        if (property_exists($data, 'hasEntryInBusinessRegister')) {
            $object->setHasEntryInBusinessRegister($data->{'hasEntryInBusinessRegister'});
        }
        if (property_exists($data, 'hasNonMailingIndication')) {
            $object->setHasNonMailingIndication($data->{'hasNonMailingIndication'});
        }
        if (property_exists($data, 'isLegalPerson')) {
            $object->setIsLegalPerson($data->{'isLegalPerson'});
        }
        if (property_exists($data, 'isBranch')) {
            $object->setIsBranch($data->{'isBranch'});
        }
        if (property_exists($data, 'isMainBranch')) {
            $object->setIsMainBranch($data->{'isMainBranch'});
        }
        if (property_exists($data, 'addresses')) {
            $values = [];
            foreach ($data->{'addresses'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'ConnectHolland\\KvkApiBundle\\API\\Client\\Model\\CompanySearchV2Address', 'json', $context);
            }
            $object->setAddresses($values);
        }
        if (property_exists($data, 'websites')) {
            $values_1 = [];
            foreach ($data->{'websites'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setWebsites($values_1);
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
        if (null !== $object->getTradeNames()) {
            $data->{'tradeNames'} = $this->normalizer->normalize($object->getTradeNames(), 'json', $context);
        }
        if (null !== $object->getHasEntryInBusinessRegister()) {
            $data->{'hasEntryInBusinessRegister'} = $object->getHasEntryInBusinessRegister();
        }
        if (null !== $object->getHasNonMailingIndication()) {
            $data->{'hasNonMailingIndication'} = $object->getHasNonMailingIndication();
        }
        if (null !== $object->getIsLegalPerson()) {
            $data->{'isLegalPerson'} = $object->getIsLegalPerson();
        }
        if (null !== $object->getIsBranch()) {
            $data->{'isBranch'} = $object->getIsBranch();
        }
        if (null !== $object->getIsMainBranch()) {
            $data->{'isMainBranch'} = $object->getIsMainBranch();
        }
        if (null !== $object->getAddresses()) {
            $values = [];
            foreach ($object->getAddresses() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'addresses'} = $values;
        }
        if (null !== $object->getWebsites()) {
            $values_1 = [];
            foreach ($object->getWebsites() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'websites'} = $values_1;
        }

        return $data;
    }
}
