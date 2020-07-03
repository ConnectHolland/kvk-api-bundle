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
class CompanyProfileV2AddressNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'ConnectHolland\\KvkApiBundle\\API\\Client\\Model\\CompanyProfileV2Address';
    }
    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'ConnectHolland\\KvkApiBundle\\API\\Client\\Model\\CompanyProfileV2Address';
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
        $object = new \ConnectHolland\KvkApiBundle\API\Client\Model\CompanyProfileV2Address();
        if (property_exists($data, 'type')) {
            $object->setType($data->{'type'});
        }
        if (property_exists($data, 'bagId')) {
            $object->setBagId($data->{'bagId'});
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
        if (property_exists($data, 'gpsLatitude')) {
            $object->setGpsLatitude($data->{'gpsLatitude'});
        }
        if (property_exists($data, 'gpsLongitude')) {
            $object->setGpsLongitude($data->{'gpsLongitude'});
        }
        if (property_exists($data, 'rijksdriehoekX')) {
            $object->setRijksdriehoekX($data->{'rijksdriehoekX'});
        }
        if (property_exists($data, 'rijksdriehoekY')) {
            $object->setRijksdriehoekY($data->{'rijksdriehoekY'});
        }
        if (property_exists($data, 'rijksdriehoekZ')) {
            $object->setRijksdriehoekZ($data->{'rijksdriehoekZ'});
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getType()) {
            $data->{'type'} = $object->getType();
        }
        if (null !== $object->getBagId()) {
            $data->{'bagId'} = $object->getBagId();
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
        if (null !== $object->getGpsLatitude()) {
            $data->{'gpsLatitude'} = $object->getGpsLatitude();
        }
        if (null !== $object->getGpsLongitude()) {
            $data->{'gpsLongitude'} = $object->getGpsLongitude();
        }
        if (null !== $object->getRijksdriehoekX()) {
            $data->{'rijksdriehoekX'} = $object->getRijksdriehoekX();
        }
        if (null !== $object->getRijksdriehoekY()) {
            $data->{'rijksdriehoekY'} = $object->getRijksdriehoekY();
        }
        if (null !== $object->getRijksdriehoekZ()) {
            $data->{'rijksdriehoekZ'} = $object->getRijksdriehoekZ();
        }
        return $data;
    }
}