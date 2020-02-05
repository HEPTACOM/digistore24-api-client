<?php declare(strict_types=1);

namespace Heptacom\DigiStore24\Model;

class ListDeliveriesSearchItem
{
    /**
     * @var string
     */
    protected $purchaseId;

    public function getPurchaseId(): string
    {
        return $this->purchaseId;
    }

    public function setPurchaseId(string $purchaseId): self
    {
        $this->purchaseId = $purchaseId;

        return $this;
    }
}
