<?php declare(strict_types=1);

namespace Heptacom\DigiStore24\Model;

class ListEtickets
{
    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $downloadUrl;

    /**
     * @var string|null
     */
    protected $duration;

    /**
     * @var string
     */
    protected $dateId;

    /**
     * @var string
     */
    protected $date;

    /**
     * @var string
     */
    protected $hint;

    /**
     * @var string
     */
    protected $locationId;

    /**
     * @var string
     */
    protected $templateId;

    /**
     * @var string
     */
    protected $email;

    /**
     * @var string
     */
    protected $count;

    /**
     * @var string
     */
    protected $no;

    /**
     * @var string
     */
    protected $firstName;

    /**
     * @var string
     */
    protected $lastName;

    /**
     * @var string
     */
    protected $salutation;

    /**
     * @var string
     */
    protected $title;

    /**
     * @var string
     */
    protected $language;

    /**
     * @var string
     */
    protected $usedAt;

    /**
     * @var string
     */
    protected $isBlocked;

    /**
     * @var string|null
     */
    protected $note;

    /**
     * @var string
     */
    protected $purchaseItemId;

    /**
     * @var string
     */
    protected $productId;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getDownloadUrl(): string
    {
        return $this->downloadUrl;
    }

    public function setDownloadUrl(string $downloadUrl): self
    {
        $this->downloadUrl = $downloadUrl;

        return $this;
    }

    public function getDuration(): ?string
    {
        return $this->duration;
    }

    public function setDuration(?string $duration): self
    {
        $this->duration = $duration;

        return $this;
    }

    public function getDateId(): string
    {
        return $this->dateId;
    }

    public function setDateId(string $dateId): self
    {
        $this->dateId = $dateId;

        return $this;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function setDate(string $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getHint(): string
    {
        return $this->hint;
    }

    public function setHint(string $hint): self
    {
        $this->hint = $hint;

        return $this;
    }

    public function getLocationId(): string
    {
        return $this->locationId;
    }

    public function setLocationId(string $locationId): self
    {
        $this->locationId = $locationId;

        return $this;
    }

    public function getTemplateId(): string
    {
        return $this->templateId;
    }

    public function setTemplateId(string $templateId): self
    {
        $this->templateId = $templateId;

        return $this;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getCount(): string
    {
        return $this->count;
    }

    public function setCount(string $count): self
    {
        $this->count = $count;

        return $this;
    }

    public function getNo(): string
    {
        return $this->no;
    }

    public function setNo(string $no): self
    {
        $this->no = $no;

        return $this;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function setFirstName(string $firstName): self
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function setLastName(string $lastName): self
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function getSalutation(): string
    {
        return $this->salutation;
    }

    public function setSalutation(string $salutation): self
    {
        $this->salutation = $salutation;

        return $this;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function setLanguage(string $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function getUsedAt(): string
    {
        return $this->usedAt;
    }

    public function setUsedAt(string $usedAt): self
    {
        $this->usedAt = $usedAt;

        return $this;
    }

    public function getIsBlocked(): string
    {
        return $this->isBlocked;
    }

    public function setIsBlocked(string $isBlocked): self
    {
        $this->isBlocked = $isBlocked;

        return $this;
    }

    public function getNote(): ?string
    {
        return $this->note;
    }

    public function setNote(?string $note): self
    {
        $this->note = $note;

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

    public function getProductId(): string
    {
        return $this->productId;
    }

    public function setProductId(string $productId): self
    {
        $this->productId = $productId;

        return $this;
    }
}
