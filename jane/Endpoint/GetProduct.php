<?php declare(strict_types=1);

namespace Heptacom\DigiStore24\Endpoint;

class GetProduct extends \Jane\OpenApiRuntime\Client\BaseEndpoint implements \Jane\OpenApiRuntime\Client\Psr7Endpoint
{
    use \Jane\OpenApiRuntime\Client\Psr7EndpointTrait;

    protected $apiToken;

    /**
     * @param array $queryParameters {
     *
     *     @var string $operator
     *     @var string $language de, en
     *     @var string $product_id
     *     @var string $show_deleted
     * }
     */
    public function __construct(string $apiToken, array $queryParameters = [])
    {
        $this->apiToken = $apiToken;
        $this->queryParameters = $queryParameters;
    }

    public function getMethod(): string
    {
        return 'GET';
    }

    public function getUri(): string
    {
        return str_replace(['{apiToken}'], [$this->apiToken], '/{apiToken}/json/getProduct');
    }

    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }

    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }

    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['operator', 'language', 'product_id', 'show_deleted']);
        $optionsResolver->setRequired(['product_id']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->setAllowedTypes('operator', ['string']);
        $optionsResolver->setAllowedTypes('language', ['string']);
        $optionsResolver->setAllowedTypes('product_id', ['string']);
        $optionsResolver->setAllowedTypes('show_deleted', ['string']);

        return $optionsResolver;
    }

    /**
     * {@inheritdoc}
     *
     * @return \Heptacom\DigiStore24\Model\GetProductResponse|\Heptacom\DigiStore24\Model\ErrorResponse|null
     */
    protected function transformResponseBody(string $body, int $status, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        if ($status === 200 && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Heptacom\\DigiStore24\\Model\\GetProductResponse', 'json');
        }
        if ($status === 4 && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Heptacom\\DigiStore24\\Model\\ErrorResponse', 'json');
        }
        if ($status === 5 && mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Heptacom\\DigiStore24\\Model\\ErrorResponse', 'json');
        }
    }
}
