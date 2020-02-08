<?php declare(strict_types=1);

namespace Heptacom\DigiStore24\Model;

class GetProductPaymentPlans
{
    /**
     * @var string
     */
    protected $description;

    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $productId;

    /**
     * @var string
     */
    protected $createdAt;

    /**
     * @var string
     */
    protected $modifiedAt;

    /**
     * @var string
     */
    protected $currency;

    /**
     * @var string
     */
    protected $firstAmount;

    /**
     * @var string
     */
    protected $otherAmounts;

    /**
     * @var string
     */
    protected $numberOfInstallments;

    /**
     * @var string
     */
    protected $otherBillingIntervals;

    /**
     * @var string
     */
    protected $firstBillingInterval;

    /**
     * @var string
     */
    protected $position;

    /**
     * @var string
     */
    protected $cancelPolicy;

    /**
     * @var string
     */
    protected $isForSale;

    /**
     * @var string
     */
    protected $isForSaleMsg;

    /**
     * Y or N
     *
     * @var string
     */
    protected $isActive;

    /**
     * Y or N
     *
     * @var string
     */
    protected $isSwitchingAllowed;

    /**
     * Y or N
     *
     * @var string
     */
    protected $canBuyerTerminateInstallments;

    public function getDescription(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getProductId(): string
    {
        return $this->productId;
    }

    public function setProductId(string $productId): self
    {
        $this->productId = $productId;

        return $this;
    }

    public function getCreatedAt(): string
    {
        return $this->createdAt;
    }

    public function setCreatedAt(string $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getModifiedAt(): string
    {
        return $this->modifiedAt;
    }

    public function setModifiedAt(string $modifiedAt): self
    {
        $this->modifiedAt = $modifiedAt;

        return $this;
    }

    public function getCurrency(): string
    {
        return $this->currency;
    }

    public function setCurrency(string $currency): self
    {
        $this->currency = $currency;

        return $this;
    }

    public function getFirstAmount(): string
    {
        return $this->firstAmount;
    }

    public function setFirstAmount(string $firstAmount): self
    {
        $this->firstAmount = $firstAmount;

        return $this;
    }

    public function getOtherAmounts(): string
    {
        return $this->otherAmounts;
    }

    public function setOtherAmounts(string $otherAmounts): self
    {
        $this->otherAmounts = $otherAmounts;

        return $this;
    }

    public function getNumberOfInstallments(): string
    {
        return $this->numberOfInstallments;
    }

    public function setNumberOfInstallments(string $numberOfInstallments): self
    {
        $this->numberOfInstallments = $numberOfInstallments;

        return $this;
    }

    public function getOtherBillingIntervals(): string
    {
        return $this->otherBillingIntervals;
    }

    public function setOtherBillingIntervals(string $otherBillingIntervals): self
    {
        $this->otherBillingIntervals = $otherBillingIntervals;

        return $this;
    }

    public function getFirstBillingInterval(): string
    {
        return $this->firstBillingInterval;
    }

    public function setFirstBillingInterval(string $firstBillingInterval): self
    {
        $this->firstBillingInterval = $firstBillingInterval;

        return $this;
    }

    public function getPosition(): string
    {
        return $this->position;
    }

    public function setPosition(string $position): self
    {
        $this->position = $position;

        return $this;
    }

    public function getCancelPolicy(): string
    {
        return $this->cancelPolicy;
    }

    public function setCancelPolicy(string $cancelPolicy): self
    {
        $this->cancelPolicy = $cancelPolicy;

        return $this;
    }

    public function getIsForSale(): string
    {
        return $this->isForSale;
    }

    public function setIsForSale(string $isForSale): self
    {
        $this->isForSale = $isForSale;

        return $this;
    }

    public function getIsForSaleMsg(): string
    {
        return $this->isForSaleMsg;
    }

    public function setIsForSaleMsg(string $isForSaleMsg): self
    {
        $this->isForSaleMsg = $isForSaleMsg;

        return $this;
    }

    /**
     * Y or N
     */
    public function getIsActive(): string
    {
        return $this->isActive;
    }

    /**
     * Y or N
     */
    public function setIsActive(string $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    /**
     * Y or N
     */
    public function getIsSwitchingAllowed(): string
    {
        return $this->isSwitchingAllowed;
    }

    /**
     * Y or N
     */
    public function setIsSwitchingAllowed(string $isSwitchingAllowed): self
    {
        $this->isSwitchingAllowed = $isSwitchingAllowed;

        return $this;
    }

    /**
     * Y or N
     */
    public function getCanBuyerTerminateInstallments(): string
    {
        return $this->canBuyerTerminateInstallments;
    }

    /**
     * Y or N
     */
    public function setCanBuyerTerminateInstallments(string $canBuyerTerminateInstallments): self
    {
        $this->canBuyerTerminateInstallments = $canBuyerTerminateInstallments;

        return $this;
    }
}
