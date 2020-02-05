<?php declare(strict_types=1);

namespace Heptacom\DigiStore24;

class Client extends \Jane\OpenApiRuntime\Client\Psr18Client
{
    /**
     * @param array $queryParameters {
     *
     *     @var string $operator
     *     @var string $language de, en
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function globalSettings(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\GlobalSettings($apiToken, $queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var string $operator
     *     @var string $language de, en
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Heptacom\DigiStore24\Model\ListBuyUrlsResponse|\Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function listBuyUrls(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\ListBuyUrls($apiToken, $queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var string $operator
     *     @var string $language de, en
     *     @var array $search
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Heptacom\DigiStore24\Model\ListOrderformsResponse|\Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function listDeliveries(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\ListDeliveries($apiToken, $queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var string $operator
     *     @var string $language de, en
     *     @var string $layout all, orderform_responsive, orderform_widget, orderform_legacy
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Heptacom\DigiStore24\Model\ListOrderformsResponse|\Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function listOrderforms(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\ListOrderforms($apiToken, $queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var string $operator
     *     @var string $language de, en
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Heptacom\DigiStore24\Model\ListProductGroupsResponse|\Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function listProductGroups(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\ListProductGroups($apiToken, $queryParameters), $fetch);
    }

    public static function create($httpClient = null)
    {
        if ($httpClient === null) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUrlFactory()->createUri('https://www.digistore24.com/api/call');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $serializer = new \Symfony\Component\Serializer\Serializer([new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Heptacom\DigiStore24\Normalizer\JaneObjectNormalizer()], [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode())]);

        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}
