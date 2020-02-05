<?php declare(strict_types=1);

namespace Heptacom\DigiStore24\Model;

class ListBuyUrls
{
    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $validUntil;

    /**
     * @var string
     */
    protected $productId;

    /**
     * @var string
     */
    protected $url;

    /**
     * @var string|null
     */
    protected $email;

    /**
     * @var string
     */
    protected $createdAt;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getValidUntil(): string
    {
        return $this->validUntil;
    }

    public function setValidUntil(string $validUntil): self
    {
        $this->validUntil = $validUntil;

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

    public function getUrl(): string
    {
        return $this->url;
    }

    public function setUrl(string $url): self
    {
        $this->url = $url;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

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
}
