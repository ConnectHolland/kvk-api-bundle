<?php

namespace ConnectHolland\KvkApiBundle\API\Client\Normalizer;

use Jane\JsonSchemaRuntime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class CompanyExtendedV2Normalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ConnectHolland\\KvkApiBundle\\API\\Client\\Model\\CompanyExtendedV2';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ConnectHolland\\KvkApiBundle\\API\\Client\\Model\\CompanyExtendedV2';
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        if (isset($data->{'$recursiveRef'})) {
            return new Reference($data->{'$recursiveRef'}, $context['document-origin']);
        }
        $object = new \ConnectHolland\KvkApiBundle\API\Client\Model\CompanyExtendedV2();
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
            $object->setTradeNames($this->denormalizer->denormalize($data->{'tradeNames'}, 'ConnectHolland\\KvkApiBundle\\API\\Client\\Model\\CompanyProfileV2TradeNames', 'json', $context));
        }
        if (property_exists($data, 'legalForm')) {
            $object->setLegalForm($data->{'legalForm'});
        }
        if (property_exists($data, 'businessActivities')) {
            $values = array();
            foreach ($data->{'businessActivities'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'ConnectHolland\\KvkApiBundle\\API\\Client\\Model\\CompanyProfileV2BusinessActivity', 'json', $context);
            }
            $object->setBusinessActivities($values);
        }
        if (property_exists($data, 'hasEntryInBusinessRegister')) {
            $object->setHasEntryInBusinessRegister($data->{'hasEntryInBusinessRegister'});
        }
        if (property_exists($data, 'hasCommercialActivities')) {
            $object->setHasCommercialActivities($data->{'hasCommercialActivities'});
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
        if (property_exists($data, 'employees')) {
            $object->setEmployees($data->{'employees'});
        }
        if (property_exists($data, 'foundationDate')) {
            $object->setFoundationDate($data->{'foundationDate'});
        }
        if (property_exists($data, 'registrationDate')) {
            $object->setRegistrationDate($data->{'registrationDate'});
        }
        if (property_exists($data, 'deregistrationDate')) {
            $object->setDeregistrationDate($data->{'deregistrationDate'});
        }
        if (property_exists($data, 'addresses')) {
            $values_1 = array();
            foreach ($data->{'addresses'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'ConnectHolland\\KvkApiBundle\\API\\Client\\Model\\CompanyProfileV2Address', 'json', $context);
            }
            $object->setAddresses($values_1);
        }
        if (property_exists($data, 'websites')) {
            $values_2 = array();
            foreach ($data->{'websites'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setWebsites($values_2);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
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
        if (null !== $object->getLegalForm()) {
            $data->{'legalForm'} = $object->getLegalForm();
        }
        if (null !== $object->getBusinessActivities()) {
            $values = array();
            foreach ($object->getBusinessActivities() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'businessActivities'} = $values;
        }
        if (null !== $object->getHasEntryInBusinessRegister()) {
            $data->{'hasEntryInBusinessRegister'} = $object->getHasEntryInBusinessRegister();
        }
        if (null !== $object->getHasCommercialActivities()) {
            $data->{'hasCommercialActivities'} = $object->getHasCommercialActivities();
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
        if (null !== $object->getEmployees()) {
            $data->{'employees'} = $object->getEmployees();
        }
        if (null !== $object->getFoundationDate()) {
            $data->{'foundationDate'} = $object->getFoundationDate();
        }
        if (null !== $object->getRegistrationDate()) {
            $data->{'registrationDate'} = $object->getRegistrationDate();
        }
        if (null !== $object->getDeregistrationDate()) {
            $data->{'deregistrationDate'} = $object->getDeregistrationDate();
        }
        if (null !== $object->getAddresses()) {
            $values_1 = array();
            foreach ($object->getAddresses() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'addresses'} = $values_1;
        }
        if (null !== $object->getWebsites()) {
            $values_2 = array();
            foreach ($object->getWebsites() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'websites'} = $values_2;
        }
        return $data;
    }
}