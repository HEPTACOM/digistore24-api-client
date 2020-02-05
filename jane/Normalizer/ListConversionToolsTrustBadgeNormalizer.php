<?php declare(strict_types=1);

namespace Heptacom\DigiStore24\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ListConversionToolsTrustBadgeNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Heptacom\\DigiStore24\\Model\\ListConversionToolsTrustBadge';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Heptacom\\DigiStore24\\Model\\ListConversionToolsTrustBadge';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \Heptacom\DigiStore24\Model\ListConversionToolsTrustBadge();
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'code')) {
            $object->setCode($data->{'code'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'badge_type')) {
            $object->setBadgeType($data->{'badge_type'});
        }
        if (property_exists($data, 'position')) {
            $object->setPosition($data->{'position'});
        }
        if (property_exists($data, 'language')) {
            $object->setLanguage($data->{'language'});
        }
        if (property_exists($data, 'sticky')) {
            $object->setSticky($data->{'sticky'});
        }
        if (property_exists($data, 'is_earnigs_disclaimer_shown')) {
            $object->setIsEarnigsDisclaimerShown($data->{'is_earnigs_disclaimer_shown'});
        }
        if (property_exists($data, 'auth_key')) {
            $object->setAuthKey($data->{'auth_key'});
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if ($object->getId() !== null) {
            $data->{'id'} = $object->getId();
        }
        if ($object->getCode() !== null) {
            $data->{'code'} = $object->getCode();
        }
        if ($object->getName() !== null) {
            $data->{'name'} = $object->getName();
        }
        if ($object->getBadgeType() !== null) {
            $data->{'badge_type'} = $object->getBadgeType();
        }
        if ($object->getPosition() !== null) {
            $data->{'position'} = $object->getPosition();
        }
        if ($object->getLanguage() !== null) {
            $data->{'language'} = $object->getLanguage();
        }
        if ($object->getSticky() !== null) {
            $data->{'sticky'} = $object->getSticky();
        }
        if ($object->getIsEarnigsDisclaimerShown() !== null) {
            $data->{'is_earnigs_disclaimer_shown'} = $object->getIsEarnigsDisclaimerShown();
        }
        if ($object->getAuthKey() !== null) {
            $data->{'auth_key'} = $object->getAuthKey();
        }

        return $data;
    }
}
