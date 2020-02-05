<?php declare(strict_types=1);

namespace Heptacom\DigiStore24\Normalizer;

use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class ListCurrenciesNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    public function supportsDenormalization($data, $type, $format = null)
    {
        return $type === 'Heptacom\\DigiStore24\\Model\\ListCurrencies';
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && get_class($data) === 'Heptacom\\DigiStore24\\Model\\ListCurrencies';
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException(sprintf('Given $data is not an object (%s given). We need an object in order to continue denormalize method.', gettype($data)));
        }
        $object = new \Heptacom\DigiStore24\Model\ListCurrencies();
        if (property_exists($data, 'id')) {
            $object->setId($data->{'id'});
        }
        if (property_exists($data, 'code')) {
            $object->setCode($data->{'code'});
        }
        if (property_exists($data, 'name')) {
            $object->setName($data->{'name'});
        }
        if (property_exists($data, 'name_de') && $data->{'name_de'} !== null) {
            $object->setNameDe($data->{'name_de'});
        } elseif (property_exists($data, 'name_de') && $data->{'name_de'} === null) {
            $object->setNameDe(null);
        }
        if (property_exists($data, 'name_en') && $data->{'name_en'} !== null) {
            $object->setNameEn($data->{'name_en'});
        } elseif (property_exists($data, 'name_en') && $data->{'name_en'} === null) {
            $object->setNameEn(null);
        }
        if (property_exists($data, 'name_fr') && $data->{'name_fr'} !== null) {
            $object->setNameFr($data->{'name_fr'});
        } elseif (property_exists($data, 'name_fr') && $data->{'name_fr'} === null) {
            $object->setNameFr(null);
        }
        if (property_exists($data, 'name_es') && $data->{'name_es'} !== null) {
            $object->setNameEs($data->{'name_es'});
        } elseif (property_exists($data, 'name_es') && $data->{'name_es'} === null) {
            $object->setNameEs(null);
        }
        if (property_exists($data, 'name_nl') && $data->{'name_nl'} !== null) {
            $object->setNameNl($data->{'name_nl'});
        } elseif (property_exists($data, 'name_nl') && $data->{'name_nl'} === null) {
            $object->setNameNl(null);
        }
        if (property_exists($data, 'name_it') && $data->{'name_it'} !== null) {
            $object->setNameIt($data->{'name_it'});
        } elseif (property_exists($data, 'name_it') && $data->{'name_it'} === null) {
            $object->setNameIt(null);
        }
        if (property_exists($data, 'symbol')) {
            $object->setSymbol($data->{'symbol'});
        }
        if (property_exists($data, 'min_price')) {
            $object->setMinPrice($data->{'min_price'});
        }
        if (property_exists($data, 'max_price')) {
            $object->setMaxPrice($data->{'max_price'});
        }
        if (property_exists($data, 'to_EUR') && $data->{'to_EUR'} !== null) {
            $object->setToEUR($data->{'to_EUR'});
        } elseif (property_exists($data, 'to_EUR') && $data->{'to_EUR'} === null) {
            $object->setToEUR(null);
        }
        if (property_exists($data, 'to_USD') && $data->{'to_USD'} !== null) {
            $object->setToUSD($data->{'to_USD'});
        } elseif (property_exists($data, 'to_USD') && $data->{'to_USD'} === null) {
            $object->setToUSD(null);
        }
        if (property_exists($data, 'to_CHF') && $data->{'to_CHF'} !== null) {
            $object->setToCHF($data->{'to_CHF'});
        } elseif (property_exists($data, 'to_CHF') && $data->{'to_CHF'} === null) {
            $object->setToCHF(null);
        }
        if (property_exists($data, 'is_default_for_countries')) {
            $values = [];
            foreach ($data->{'is_default_for_countries'} as $value) {
                $values[] = $value;
            }
            $object->setIsDefaultForCountries($values);
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
        $data->{'name_de'} = $object->getNameDe();
        $data->{'name_en'} = $object->getNameEn();
        $data->{'name_fr'} = $object->getNameFr();
        $data->{'name_es'} = $object->getNameEs();
        $data->{'name_nl'} = $object->getNameNl();
        $data->{'name_it'} = $object->getNameIt();
        if ($object->getSymbol() !== null) {
            $data->{'symbol'} = $object->getSymbol();
        }
        if ($object->getMinPrice() !== null) {
            $data->{'min_price'} = $object->getMinPrice();
        }
        if ($object->getMaxPrice() !== null) {
            $data->{'max_price'} = $object->getMaxPrice();
        }
        $data->{'to_EUR'} = $object->getToEUR();
        $data->{'to_USD'} = $object->getToUSD();
        $data->{'to_CHF'} = $object->getToCHF();
        if ($object->getIsDefaultForCountries() !== null) {
            $values = [];
            foreach ($object->getIsDefaultForCountries() as $value) {
                $values[] = $value;
            }
            $data->{'is_default_for_countries'} = $values;
        }

        return $data;
    }
}
