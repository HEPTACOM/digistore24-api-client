<?php declare(strict_types=1);

namespace Heptacom\DigiStore24\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ListCustomFormRecordsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Heptacom\\DigiStore24\\Model\\ListCustomFormRecords';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Heptacom\\DigiStore24\\Model\\ListCustomFormRecords';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \Heptacom\DigiStore24\Model\ListCustomFormRecords();
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'form_id')) {
            $object->setFormId($data->{'form_id'});
        }
        if (property_exists($data, 'purchase_item_id')) {
            $object->setPurchaseItemId($data->{'purchase_item_id'});
        }
        if (property_exists($data, 'product_id') && $data->{'product_id'} !== null) {
            $object->setProductId($data->{'product_id'});
        } elseif (property_exists($data, 'product_id') && $data->{'product_id'} === null) {
            $object->setProductId(null);
        }
        if (property_exists($data, 'form_no') && $data->{'form_no'} !== null) {
            $object->setFormNo($data->{'form_no'});
        } elseif (property_exists($data, 'form_no') && $data->{'form_no'} === null) {
            $object->setFormNo(null);
        }
        if (property_exists($data, 'form_count') && $data->{'form_count'} !== null) {
            $object->setFormCount($data->{'form_count'});
        } elseif (property_exists($data, 'form_count') && $data->{'form_count'} === null) {
            $object->setFormCount(null);
        }
        if (property_exists($data, 'data')) {
            $values = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'data'} as $key => $value) {
                $values[$key] = $value;
            }
            $object->setData($values);
        }
        if (property_exists($data, 'address')) {
            $values_1 = new \ArrayObject([], \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'address'} as $key_1 => $value_1) {
                $values_1[$key_1] = $value_1;
            }
            $object->setAddress($values_1);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if ($object->getId() !== null) {
            $data->{'id'} = $object->getId();
        }
        if ($object->getFormId() !== null) {
            $data->{'form_id'} = $object->getFormId();
        }
        if ($object->getPurchaseItemId() !== null) {
            $data->{'purchase_item_id'} = $object->getPurchaseItemId();
        }
        $data->{'product_id'} = $object->getProductId();
        $data->{'form_no'} = $object->getFormNo();
        $data->{'form_count'} = $object->getFormCount();
        if ($object->getData() !== null) {
            $values = new \stdClass();
            foreach ($object->getData() as $key => $value) {
                $values->{$key} = $value;
            }
            $data->{'data'} = $values;
        }
        if ($object->getAddress() !== null) {
            $values_1 = new \stdClass();
            foreach ($object->getAddress() as $key_1 => $value_1) {
                $values_1->{$key_1} = $value_1;
            }
            $data->{'address'} = $values_1;
        }

        return $data;
    }
}
