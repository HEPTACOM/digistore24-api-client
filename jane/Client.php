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
    public function createBillingOnDemand(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\CreateBillingOnDemand($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function createBuyUrl(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\CreateBuyUrl($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function createImage(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\CreateImage($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function createOrderform(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\CreateOrderform($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function createPaymentplan(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\CreatePaymentplan($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function createProduct(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\CreateProduct($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function createProductGroup(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\CreateProductGroup($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function createUpgrade(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\CreateUpgrade($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function createVoucher(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\CreateVoucher($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function deleteBuyUrl(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\DeleteBuyUrl($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function deleteImage(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\DeleteImage($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function deleteOrderform(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\DeleteOrderform($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function deletePaymentplan(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\DeletePaymentplan($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function deleteProduct(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\DeleteProduct($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function deleteProductGroup(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\DeleteProductGroup($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function deleteUpgrade(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\DeleteUpgrade($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function deleteUpsells(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\DeleteUpsells($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function deleteVoucher(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\DeleteVoucher($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function getAffiliateCommission(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\GetAffiliateCommission($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function getBuyer(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\GetBuyer($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function getDelivery(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\GetDelivery($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function getEticket(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\GetEticket($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function getEticketSettings(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\GetEticketSettings($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function getGlobalSettings(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\GetGlobalSettings($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function getImage(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\GetImage($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function getMarketplaceEntry(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\GetMarketplaceEntry($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function getOrderform(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\GetOrderform($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function getOrderformMetas(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\GetOrderformMetas($apiToken, $queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var string $operator
     *     @var string $language de, en
     *     @var string $product_id
     *     @var string $show_deleted
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Heptacom\DigiStore24\Model\GetProductResponse|\Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function getProduct(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\GetProduct($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function getProductGroup(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\GetProductGroup($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function getPurchase(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\GetPurchase($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function getPurchaseDownloads(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\GetPurchaseDownloads($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function getSmartupgrade(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\GetSmartupgrade($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function getUpgrades(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\GetUpgrades($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function getUpsells(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\GetUpsells($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function getUserInfo(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\GetUserInfo($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function getVoucher(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\GetVoucher($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function ipnDelete(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\IpnDelete($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function ipnInfo(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\IpnInfo($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function ipnSetup(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\IpnSetup($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function listBuyers(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\ListBuyers($apiToken, $queryParameters), $fetch);
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
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function listCommissions(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\ListCommissions($apiToken, $queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var string $operator
     *     @var string $language de, en
     *     @var string $type smartupgrade, socialproof_box, socialproof_bubble, countdown, trust_badge
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Heptacom\DigiStore24\Model\ListConversionToolsResponse|\Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function listConversionTools(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\ListConversionTools($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ListCountriesResponse|\Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function listCountries(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\ListCountries($apiToken, $queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var string $operator
     *     @var string $language de, en
     *     @var string $convert_to EUR, USD, CHF
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Heptacom\DigiStore24\Model\ListCurrenciesResponse|\Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function listCurrencies(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\ListCurrencies($apiToken, $queryParameters), $fetch);
    }

    /**
     * @param array $queryParameters {
     *
     *     @var string $operator
     *     @var string $language de, en
     *     @var string $purchase_id
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Heptacom\DigiStore24\Model\ListCustomFormRecordsResponse|\Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function listCustomFormRecords(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\ListCustomFormRecords($apiToken, $queryParameters), $fetch);
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
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Heptacom\DigiStore24\Model\ListEticketsResponse|\Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function listEtickets(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\ListEtickets($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function listImages(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\ListImages($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function listInvoices(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\ListInvoices($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function listMarketplaceEntries(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\ListMarketplaceEntries($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function listPaymentPlans(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\ListPaymentPlans($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function listPayouts(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\ListPayouts($apiToken, $queryParameters), $fetch);
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

    /**
     * @param array $queryParameters {
     *
     *     @var string $operator
     *     @var string $language de, en
     * }
     *
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return \Heptacom\DigiStore24\Model\ListProductsResponse|\Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function listProducts(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\ListProducts($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function listPurchases(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\ListPurchases($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function listRebillingStatusChanges(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\ListRebillingStatusChanges($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function listSmartUpgrades(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\ListSmartUpgrades($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function listTransactions(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\ListTransactions($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function listUpgrades(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\ListUpgrades($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function listVouchers(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\ListVouchers($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\PingResponse|\Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function ping(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\Ping($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function refundTransaction(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\RefundTransaction($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function renderJsTrackingCode(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\RenderJsTrackingCode($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function reportFraud(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\ReportFraud($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function requestApiKey(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\RequestApiKey($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function resendInvoiceMail(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\ResendInvoiceMail($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function resendPurchaseConfirmationMail(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\ResendPurchaseConfirmationMail($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function retrieveApiKey(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\RetrieveApiKey($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function setAffiliateForEmail(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\SetAffiliateForEmail($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function startRebilling(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\StartRebilling($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function statsAffiliateToplist(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\StatsAffiliateToplist($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function statsDailyAmounts(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\StatsDailyAmounts($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function statsExpectedPayouts(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\StatsExpectedPayouts($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function statsMarketplace(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\StatsMarketplace($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function statsSales(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\StatsSales($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function statsSalesSummary(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\StatsSalesSummary($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function stopRebilling(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\StopRebilling($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function unregister(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\Unregister($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function updateAffiliateCommission(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\UpdateAffiliateCommission($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function updateBuyer(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\UpdateBuyer($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function updateDelivery(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\UpdateDelivery($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function updateOrderform(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\UpdateOrderform($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function updatePaymentplan(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\UpdatePaymentplan($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function updateProduct(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\UpdateProduct($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function updateProductGroup(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\UpdateProductGroup($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function updatePurchase(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\UpdatePurchase($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function updateUpsells(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\UpdateUpsells($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function updateVoucher(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\UpdateVoucher($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function validateAffiliate(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\ValidateAffiliate($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function validateCouponCode(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\ValidateCouponCode($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function validateEticket(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\ValidateEticket($apiToken, $queryParameters), $fetch);
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
     * @return \Heptacom\DigiStore24\Model\ErrorResponse|\Psr\Http\Message\ResponseInterface|null
     */
    public function validateLicenseKey(string $apiToken, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executePsr7Endpoint(new \Heptacom\DigiStore24\Endpoint\ValidateLicenseKey($apiToken, $queryParameters), $fetch);
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
