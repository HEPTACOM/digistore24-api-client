<?php declare(strict_types=1);

namespace Heptacom\DigiStore24\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ListEticketsResponseDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Heptacom\\DigiStore24\\Model\\ListEticketsResponseData';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Heptacom\\DigiStore24\\Model\\ListEticketsResponseData';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \Heptacom\DigiStore24\Model\ListEticketsResponseData();
        if (property_exists($data, 'etickets')) {
            $values = [];
            foreach ($data->{'etickets'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Heptacom\\DigiStore24\\Model\\ListEtickets', 'json', $context);
            }
            $object->setEtickets($values);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if ($object->getEtickets() !== null) {
            $values = [];
            foreach ($object->getEtickets() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'etickets'} = $values;
        }

        return $data;
    }
}
