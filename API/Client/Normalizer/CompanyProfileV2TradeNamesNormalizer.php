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
class CompanyProfileV2TradeNamesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ConnectHolland\\KvkApiBundle\\API\\Client\\Model\\CompanyProfileV2TradeNames';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ConnectHolland\\KvkApiBundle\\API\\Client\\Model\\CompanyProfileV2TradeNames';
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
        $object = new \ConnectHolland\KvkApiBundle\API\Client\Model\CompanyProfileV2TradeNames();
        if (property_exists($data, 'businessName')) {
            $object->setBusinessName($data->{'businessName'});
        }
        if (property_exists($data, 'shortBusinessName')) {
            $object->setShortBusinessName($data->{'shortBusinessName'});
        }
        if (property_exists($data, 'currentTradeNames')) {
            $values = array();
            foreach ($data->{'currentTradeNames'} as $value) {
                $values[] = $value;
            }
            $object->setCurrentTradeNames($values);
        }
        if (property_exists($data, 'formerTradeNames')) {
            $values_1 = array();
            foreach ($data->{'formerTradeNames'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setFormerTradeNames($values_1);
        }
        if (property_exists($data, 'currentStatutoryNames')) {
            $values_2 = array();
            foreach ($data->{'currentStatutoryNames'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setCurrentStatutoryNames($values_2);
        }
        if (property_exists($data, 'formerStatutoryNames')) {
            $values_3 = array();
            foreach ($data->{'formerStatutoryNames'} as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setFormerStatutoryNames($values_3);
        }
        if (property_exists($data, 'currentNames')) {
            $values_4 = array();
            foreach ($data->{'currentNames'} as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setCurrentNames($values_4);
        }
        if (property_exists($data, 'formerNames')) {
            $values_5 = array();
            foreach ($data->{'formerNames'} as $value_5) {
                $values_5[] = $value_5;
            }
            $object->setFormerNames($values_5);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getBusinessName()) {
            $data->{'businessName'} = $object->getBusinessName();
        }
        if (null !== $object->getShortBusinessName()) {
            $data->{'shortBusinessName'} = $object->getShortBusinessName();
        }
        if (null !== $object->getCurrentTradeNames()) {
            $values = array();
            foreach ($object->getCurrentTradeNames() as $value) {
                $values[] = $value;
            }
            $data->{'currentTradeNames'} = $values;
        }
        if (null !== $object->getFormerTradeNames()) {
            $values_1 = array();
            foreach ($object->getFormerTradeNames() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'formerTradeNames'} = $values_1;
        }
        if (null !== $object->getCurrentStatutoryNames()) {
            $values_2 = array();
            foreach ($object->getCurrentStatutoryNames() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'currentStatutoryNames'} = $values_2;
        }
        if (null !== $object->getFormerStatutoryNames()) {
            $values_3 = array();
            foreach ($object->getFormerStatutoryNames() as $value_3) {
                $values_3[] = $value_3;
            }
            $data->{'formerStatutoryNames'} = $values_3;
        }
        if (null !== $object->getCurrentNames()) {
            $values_4 = array();
            foreach ($object->getCurrentNames() as $value_4) {
                $values_4[] = $value_4;
            }
            $data->{'currentNames'} = $values_4;
        }
        if (null !== $object->getFormerNames()) {
            $values_5 = array();
            foreach ($object->getFormerNames() as $value_5) {
                $values_5[] = $value_5;
            }
            $data->{'formerNames'} = $values_5;
        }
        return $data;
    }
}