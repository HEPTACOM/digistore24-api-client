<?php declare(strict_types=1);

namespace Heptacom\DigiStore24\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ListDeliveriesResponseNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Heptacom\\DigiStore24\\Model\\ListDeliveriesResponse';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Heptacom\\DigiStore24\\Model\\ListDeliveriesResponse';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \Heptacom\DigiStore24\Model\ListDeliveriesResponse();
        if (property_exists($data, 'api_version')) {
            $object->setApiVersion($data->{'api_version'});
        }
        if (property_exists($data, 'current_time')) {
            $object->setCurrentTime($data->{'current_time'});
        }
        if (property_exists($data, 'timezone')) {
            $object->setTimezone($data->{'timezone'});
        }
        if (property_exists($data, 'utc_offset')) {
            $object->setUtcOffset($data->{'utc_offset'});
        }
        if (property_exists($data, 'result')) {
            $object->setResult($data->{'result'});
        }
        if (property_exists($data, 'data')) {
            $object->setData($this->denormalizer->denormalize($data->{'data'}, 'Heptacom\\DigiStore24\\Model\\ListDeliveriesResponseData', 'json', $context));
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if ($object->getApiVersion() !== null) {
            $data->{'api_version'} = $object->getApiVersion();
        }
        if ($object->getCurrentTime() !== null) {
            $data->{'current_time'} = $object->getCurrentTime();
        }
        if ($object->getTimezone() !== null) {
            $data->{'timezone'} = $object->getTimezone();
        }
        if ($object->getUtcOffset() !== null) {
            $data->{'utc_offset'} = $object->getUtcOffset();
        }
        if ($object->getResult() !== null) {
            $data->{'result'} = $object->getResult();
        }
        if ($object->getData() !== null) {
            $data->{'data'} = $this->normalizer->normalize($object->getData(), 'json', $context);
        }

        return $data;
    }
}
