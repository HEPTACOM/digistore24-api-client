<?php declare(strict_types=1);

namespace Heptacom\DigiStore24\Normalizer;

use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;

class JaneObjectNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;

    protected $normalizers = ['Heptacom\\DigiStore24\\Model\\ErrorResponse' => 'Heptacom\\DigiStore24\\Normalizer\\ErrorResponseNormalizer', 'Heptacom\\DigiStore24\\Model\\ListBuyUrls' => 'Heptacom\\DigiStore24\\Normalizer\\ListBuyUrlsNormalizer', 'Heptacom\\DigiStore24\\Model\\ListBuyUrlsResponse' => 'Heptacom\\DigiStore24\\Normalizer\\ListBuyUrlsResponseNormalizer', 'Heptacom\\DigiStore24\\Model\\ListBuyUrlsResponseBuyurls' => 'Heptacom\\DigiStore24\\Normalizer\\ListBuyUrlsResponseBuyurlsNormalizer', 'Heptacom\\DigiStore24\\Model\\ListCountriesResponse' => 'Heptacom\\DigiStore24\\Normalizer\\ListCountriesResponseNormalizer', 'Heptacom\\DigiStore24\\Model\\ListConversionToolsCountdown' => 'Heptacom\\DigiStore24\\Normalizer\\ListConversionToolsCountdownNormalizer', 'Heptacom\\DigiStore24\\Model\\ListConversionToolsSocialproofBubble' => 'Heptacom\\DigiStore24\\Normalizer\\ListConversionToolsSocialproofBubbleNormalizer', 'Heptacom\\DigiStore24\\Model\\ListConversionToolsSocialproofBox' => 'Heptacom\\DigiStore24\\Normalizer\\ListConversionToolsSocialproofBoxNormalizer', 'Heptacom\\DigiStore24\\Model\\ListConversionToolsSmartupgrade' => 'Heptacom\\DigiStore24\\Normalizer\\ListConversionToolsSmartupgradeNormalizer', 'Heptacom\\DigiStore24\\Model\\ListConversionToolsTrustBadge' => 'Heptacom\\DigiStore24\\Normalizer\\ListConversionToolsTrustBadgeNormalizer', 'Heptacom\\DigiStore24\\Model\\ListConversionToolsResponse' => 'Heptacom\\DigiStore24\\Normalizer\\ListConversionToolsResponseNormalizer', 'Heptacom\\DigiStore24\\Model\\ListConversionToolsResponseData' => 'Heptacom\\DigiStore24\\Normalizer\\ListConversionToolsResponseDataNormalizer', 'Heptacom\\DigiStore24\\Model\\ListCurrencies' => 'Heptacom\\DigiStore24\\Normalizer\\ListCurrenciesNormalizer', 'Heptacom\\DigiStore24\\Model\\ListCurrenciesResponse' => 'Heptacom\\DigiStore24\\Normalizer\\ListCurrenciesResponseNormalizer', 'Heptacom\\DigiStore24\\Model\\ListCustomFormRecords' => 'Heptacom\\DigiStore24\\Normalizer\\ListCustomFormRecordsNormalizer', 'Heptacom\\DigiStore24\\Model\\ListCustomFormRecordsResponse' => 'Heptacom\\DigiStore24\\Normalizer\\ListCustomFormRecordsResponseNormalizer', 'Heptacom\\DigiStore24\\Model\\ListDeliveriesResponse' => 'Heptacom\\DigiStore24\\Normalizer\\ListDeliveriesResponseNormalizer', 'Heptacom\\DigiStore24\\Model\\ListDeliveriesResponseData' => 'Heptacom\\DigiStore24\\Normalizer\\ListDeliveriesResponseDataNormalizer', 'Heptacom\\DigiStore24\\Model\\ListDeliveriesSearchItem' => 'Heptacom\\DigiStore24\\Normalizer\\ListDeliveriesSearchItemNormalizer', 'Heptacom\\DigiStore24\\Model\\ListEtickets' => 'Heptacom\\DigiStore24\\Normalizer\\ListEticketsNormalizer', 'Heptacom\\DigiStore24\\Model\\ListEticketsResponse' => 'Heptacom\\DigiStore24\\Normalizer\\ListEticketsResponseNormalizer', 'Heptacom\\DigiStore24\\Model\\ListEticketsResponseData' => 'Heptacom\\DigiStore24\\Normalizer\\ListEticketsResponseDataNormalizer', 'Heptacom\\DigiStore24\\Model\\ListOrderforms' => 'Heptacom\\DigiStore24\\Normalizer\\ListOrderformsNormalizer', 'Heptacom\\DigiStore24\\Model\\ListOrderformsResponse' => 'Heptacom\\DigiStore24\\Normalizer\\ListOrderformsResponseNormalizer', 'Heptacom\\DigiStore24\\Model\\ListOrderformsResponseData' => 'Heptacom\\DigiStore24\\Normalizer\\ListOrderformsResponseDataNormalizer', 'Heptacom\\DigiStore24\\Model\\ListProductGroupsResponse' => 'Heptacom\\DigiStore24\\Normalizer\\ListProductGroupsResponseNormalizer', 'Heptacom\\DigiStore24\\Model\\ListProductGroupsResponseData' => 'Heptacom\\DigiStore24\\Normalizer\\ListProductGroupsResponseDataNormalizer'];
    protected $normalizersCache = [];

    public function supportsDenormalization($data, $type, $format = null)
    {
        return array_key_exists($type, $this->normalizers);
    }

    public function supportsNormalization($data, $format = null)
    {
        return is_object($data) && array_key_exists(get_class($data), $this->normalizers);
    }

    public function normalize($object, $format = null, array $context = [])
    {
        $normalizerClass = $this->normalizers[get_class($object)];
        $normalizer = $this->getNormalizer($normalizerClass);

        return $normalizer->normalize($object, $format, $context);
    }

    public function denormalize($data, $class, $format = null, array $context = [])
    {
        $denormalizerClass = $this->normalizers[$class];
        $denormalizer = $this->getNormalizer($denormalizerClass);

        return $denormalizer->denormalize($data, $class, $format, $context);
    }

    private function getNormalizer(string $normalizerClass)
    {
        return $this->normalizersCache[$normalizerClass] ?? $this->initNormalizer($normalizerClass);
    }

    private function initNormalizer(string $normalizerClass)
    {
        $normalizer = new $normalizerClass();
        $normalizer->setNormalizer($this->normalizer);
        $normalizer->setDenormalizer($this->denormalizer);
        $this->normalizersCache[$normalizerClass] = $normalizer;

        return $normalizer;
    }
}
