<?php declare(strict_types=1);

namespace Heptacom\DigiStore24\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ListConversionToolsResponseDataNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Heptacom\\DigiStore24\\Model\\ListConversionToolsResponseData';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Heptacom\\DigiStore24\\Model\\ListConversionToolsResponseData';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \Heptacom\DigiStore24\Model\ListConversionToolsResponseData();
        if (property_exists($data, 'trust_badges') && $data->{'trust_badges'} !== null) {
            $values = [];
            foreach ($data->{'trust_badges'} as $value) {
                $values[] = $this->denormalizer->denormalize($value, 'Heptacom\\DigiStore24\\Model\\ListConversionToolsTrustBadge', 'json', $context);
            }
            $object->setTrustBadges($values);
        } elseif (property_exists($data, 'trust_badges') && $data->{'trust_badges'} === null) {
            $object->setTrustBadges(null);
        }
        if (property_exists($data, 'countdowns') && $data->{'countdowns'} !== null) {
            $values_1 = [];
            foreach ($data->{'countdowns'} as $value_1) {
                $values_1[] = $this->denormalizer->denormalize($value_1, 'Heptacom\\DigiStore24\\Model\\ListConversionToolsCountdown', 'json', $context);
            }
            $object->setCountdowns($values_1);
        } elseif (property_exists($data, 'countdowns') && $data->{'countdowns'} === null) {
            $object->setCountdowns(null);
        }
        if (property_exists($data, 'socialproof_bubbles') && $data->{'socialproof_bubbles'} !== null) {
            $values_2 = [];
            foreach ($data->{'socialproof_bubbles'} as $value_2) {
                $values_2[] = $this->denormalizer->denormalize($value_2, 'Heptacom\\DigiStore24\\Model\\ListConversionToolsSocialproofBubble', 'json', $context);
            }
            $object->setSocialproofBubbles($values_2);
        } elseif (property_exists($data, 'socialproof_bubbles') && $data->{'socialproof_bubbles'} === null) {
            $object->setSocialproofBubbles(null);
        }
        if (property_exists($data, 'socialproof_boxes') && $data->{'socialproof_boxes'} !== null) {
            $values_3 = [];
            foreach ($data->{'socialproof_boxes'} as $value_3) {
                $values_3[] = $this->denormalizer->denormalize($value_3, 'Heptacom\\DigiStore24\\Model\\ListConversionToolsSocialproofBox', 'json', $context);
            }
            $object->setSocialproofBoxes($values_3);
        } elseif (property_exists($data, 'socialproof_boxes') && $data->{'socialproof_boxes'} === null) {
            $object->setSocialproofBoxes(null);
        }
        if (property_exists($data, 'smartupgrade') && $data->{'smartupgrade'} !== null) {
            $values_4 = [];
            foreach ($data->{'smartupgrade'} as $value_4) {
                $values_4[] = $this->denormalizer->denormalize($value_4, 'Heptacom\\DigiStore24\\Model\\ListConversionToolsSmartupgrade', 'json', $context);
            }
            $object->setSmartupgrade($values_4);
        } elseif (property_exists($data, 'smartupgrade') && $data->{'smartupgrade'} === null) {
            $object->setSmartupgrade(null);
        }

        return $object;
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $data = new \stdClass();
        if ($object->getTrustBadges() !== null) {
            $values = [];
            foreach ($object->getTrustBadges() as $value) {
                $values[] = $this->normalizer->normalize($value, 'json', $context);
            }
            $data->{'trust_badges'} = $values;
        } else {
            $data->{'trust_badges'} = null;
        }
        if ($object->getCountdowns() !== null) {
            $values_1 = [];
            foreach ($object->getCountdowns() as $value_1) {
                $values_1[] = $this->normalizer->normalize($value_1, 'json', $context);
            }
            $data->{'countdowns'} = $values_1;
        } else {
            $data->{'countdowns'} = null;
        }
        if ($object->getSocialproofBubbles() !== null) {
            $values_2 = [];
            foreach ($object->getSocialproofBubbles() as $value_2) {
                $values_2[] = $this->normalizer->normalize($value_2, 'json', $context);
            }
            $data->{'socialproof_bubbles'} = $values_2;
        } else {
            $data->{'socialproof_bubbles'} = null;
        }
        if ($object->getSocialproofBoxes() !== null) {
            $values_3 = [];
            foreach ($object->getSocialproofBoxes() as $value_3) {
                $values_3[] = $this->normalizer->normalize($value_3, 'json', $context);
            }
            $data->{'socialproof_boxes'} = $values_3;
        } else {
            $data->{'socialproof_boxes'} = null;
        }
        if ($object->getSmartupgrade() !== null) {
            $values_4 = [];
            foreach ($object->getSmartupgrade() as $value_4) {
                $values_4[] = $this->normalizer->normalize($value_4, 'json', $context);
            }
            $data->{'smartupgrade'} = $values_4;
        } else {
            $data->{'smartupgrade'} = null;
        }

        return $data;
    }
}
