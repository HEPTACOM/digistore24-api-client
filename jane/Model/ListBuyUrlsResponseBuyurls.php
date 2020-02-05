<?php declare(strict_types=1);

namespace Heptacom\DigiStore24\Model;

class ListBuyUrlsResponseBuyurls
{
    /**
     * @var ListBuyUrls[]
     */
    protected $deliveries;

    /**
     * @return ListBuyUrls[]
     */
    public function getDeliveries(): array
    {
        return $this->deliveries;
    }

    /**
     * @param ListBuyUrls[] $deliveries
     */
    public function setDeliveries(array $deliveries): self
    {
        $this->deliveries = $deliveries;

        return $this;
    }
}
