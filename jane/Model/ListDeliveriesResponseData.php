<?php declare(strict_types=1);

namespace Heptacom\DigiStore24\Model;

class ListDeliveriesResponseData
{
    /**
     * @var mixed[]
     */
    protected $deliveries;

    /**
     * @return mixed[]
     */
    public function getDeliveries(): array
    {
        return $this->deliveries;
    }

    /**
     * @param mixed[] $deliveries
     */
    public function setDeliveries(array $deliveries): self
    {
        $this->deliveries = $deliveries;

        return $this;
    }
}
