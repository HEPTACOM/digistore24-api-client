<?php declare(strict_types=1);

namespace Heptacom\DigiStore24\Model;

class ListCustomFormRecords
{
    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $formId;

    /**
     * @var string
     */
    protected $purchaseItemId;

    /**
     * @var string|null
     */
    protected $productId;

    /**
     * @var string|null
     */
    protected $formNo;

    /**
     * @var string|null
     */
    protected $formCount;

    /**
     * @var mixed[]
     */
    protected $data;

    /**
     * @var mixed[]
     */
    protected $address;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getFormId(): string
    {
        return $this->formId;
    }

    public function setFormId(string $formId): self
    {
        $this->formId = $formId;

        return $this;
    }

    public function getPurchaseItemId(): string
    {
        return $this->purchaseItemId;
    }

    public function setPurchaseItemId(string $purchaseItemId): self
    {
        $this->purchaseItemId = $purchaseItemId;

        return $this;
    }

    public function getProductId(): ?string
    {
        return $this->productId;
    }

    public function setProductId(?string $productId): self
    {
        $this->productId = $productId;

        return $this;
    }

    public function getFormNo(): ?string
    {
        return $this->formNo;
    }

    public function setFormNo(?string $formNo): self
    {
        $this->formNo = $formNo;

        return $this;
    }

    public function getFormCount(): ?string
    {
        return $this->formCount;
    }

    public function setFormCount(?string $formCount): self
    {
        $this->formCount = $formCount;

        return $this;
    }

    /**
     * @return mixed[]
     */
    public function getData(): \ArrayObject
    {
        return $this->data;
    }

    /**
     * @param mixed[] $data
     */
    public function setData(\ArrayObject $data): self
    {
        $this->data = $data;

        return $this;
    }

    /**
     * @return mixed[]
     */
    public function getAddress(): \ArrayObject
    {
        return $this->address;
    }

    /**
     * @param mixed[] $address
     */
    public function setAddress(\ArrayObject $address): self
    {
        $this->address = $address;

        return $this;
    }
}
