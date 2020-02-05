<?php declare(strict_types=1);

namespace Heptacom\DigiStore24\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ListEticketsNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Heptacom\\DigiStore24\\Model\\ListEtickets';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Heptacom\\DigiStore24\\Model\\ListEtickets';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \Heptacom\DigiStore24\Model\ListEtickets();
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'download_url')) {
            $object->setDownloadUrl($data->{'download_url'});
        }
        if (property_exists($data, 'duration') && $data->{'duration'} !== null) {
            $object->setDuration($data->{'duration'});
        } elseif (property_exists($data, 'duration') && $data->{'duration'} === null) {
            $object->setDuration(null);
        }
        if (property_exists($data, 'date_id')) {
            $object->setDateId($data->{'date_id'});
        }
        if (property_exists($data, 'date')) {
            $object->setDate($data->{'date'});
        }
        if (property_exists($data, 'hint')) {
            $object->setHint($data->{'hint'});
        }
        if (property_exists($data, 'location_id')) {
            $object->setLocationId($data->{'location_id'});
        }
        if (property_exists($data, 'template_id')) {
            $object->setTemplateId($data->{'template_id'});
        }
        if (property_exists($data, 'email')) {
            $object->setEmail($data->{'email'});
        }
        if (property_exists($data, 'count')) {
            $object->setCount($data->{'count'});
        }
        if (property_exists($data, 'no')) {
            $object->setNo($data->{'no'});
        }
        if (property_exists($data, 'first_name')) {
            $object->setFirstName($data->{'first_name'});
        }
        if (property_exists($data, 'last_name')) {
            $object->setLastName($data->{'last_name'});
        }
        if (property_exists($data, 'salutation')) {
            $object->setSalutation($data->{'salutation'});
        }
        if (property_exists($data, 'title')) {
            $object->setTitle($data->{'title'});
        }
        if (property_exists($data, 'language')) {
            $object->setLanguage($data->{'language'});
        }
        if (property_exists($data, 'used_at')) {
            $object->setUsedAt($data->{'used_at'});
        }
        if (property_exists($data, 'is_blocked')) {
            $object->setIsBlocked($data->{'is_blocked'});
        }
        if (property_exists($data, 'note') && $data->{'note'} !== null) {
            $object->setNote($data->{'note'});
        } elseif (property_exists($data, 'note') && $data->{'note'} === null) {
            $object->setNote(null);
        }
        if (property_exists($data, 'purchase_item_id')) {
            $object->setPurchaseItemId($data->{'purchase_item_id'});
        }
        if (property_exists($data, 'product_id')) {
            $object->setProductId($data->{'product_id'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if ($object->getId() !== null) {
            $data->{'id'} = $object->getId();
        }
        if ($object->getDownloadUrl() !== null) {
            $data->{'download_url'} = $object->getDownloadUrl();
        }
        $data->{'duration'} = $object->getDuration();
        if ($object->getDateId() !== null) {
            $data->{'date_id'} = $object->getDateId();
        }
        if ($object->getDate() !== null) {
            $data->{'date'} = $object->getDate();
        }
        if ($object->getHint() !== null) {
            $data->{'hint'} = $object->getHint();
        }
        if ($object->getLocationId() !== null) {
            $data->{'location_id'} = $object->getLocationId();
        }
        if ($object->getTemplateId() !== null) {
            $data->{'template_id'} = $object->getTemplateId();
        }
        if ($object->getEmail() !== null) {
            $data->{'email'} = $object->getEmail();
        }
        if ($object->getCount() !== null) {
            $data->{'count'} = $object->getCount();
        }
        if ($object->getNo() !== null) {
            $data->{'no'} = $object->getNo();
        }
        if ($object->getFirstName() !== null) {
            $data->{'first_name'} = $object->getFirstName();
        }
        if ($object->getLastName() !== null) {
            $data->{'last_name'} = $object->getLastName();
        }
        if ($object->getSalutation() !== null) {
            $data->{'salutation'} = $object->getSalutation();
        }
        if ($object->getTitle() !== null) {
            $data->{'title'} = $object->getTitle();
        }
        if ($object->getLanguage() !== null) {
            $data->{'language'} = $object->getLanguage();
        }
        if ($object->getUsedAt() !== null) {
            $data->{'used_at'} = $object->getUsedAt();
        }
        if ($object->getIsBlocked() !== null) {
            $data->{'is_blocked'} = $object->getIsBlocked();
        }
        $data->{'note'} = $object->getNote();
        if ($object->getPurchaseItemId() !== null) {
            $data->{'purchase_item_id'} = $object->getPurchaseItemId();
        }
        if ($object->getProductId() !== null) {
            $data->{'product_id'} = $object->getProductId();
        }

        return $data;
    }
}
