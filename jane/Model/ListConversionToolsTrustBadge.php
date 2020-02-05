<?php declare(strict_types=1);

namespace Heptacom\DigiStore24\Model;

class ListConversionToolsTrustBadge
{
    /**
     * @var string
     */
    protected $id;

    /**
     * @var string
     */
    protected $code;

    /**
     * @var string
     */
    protected $name;

    /**
     * @var string
     */
    protected $badgeType;

    /**
     * @var string
     */
    protected $position;

    /**
     * @var string
     */
    protected $language;

    /**
     * @var string
     */
    protected $sticky;

    /**
     * @var string
     */
    protected $isEarnigsDisclaimerShown;

    /**
     * @var string
     */
    protected $authKey;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }

    public function getCode(): string
    {
        return $this->code;
    }

    public function setCode(string $code): self
    {
        $this->code = $code;

        return $this;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getBadgeType(): string
    {
        return $this->badgeType;
    }

    public function setBadgeType(string $badgeType): self
    {
        $this->badgeType = $badgeType;

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

    public function getLanguage(): string
    {
        return $this->language;
    }

    public function setLanguage(string $language): self
    {
        $this->language = $language;

        return $this;
    }

    public function getSticky(): string
    {
        return $this->sticky;
    }

    public function setSticky(string $sticky): self
    {
        $this->sticky = $sticky;

        return $this;
    }

    public function getIsEarnigsDisclaimerShown(): string
    {
        return $this->isEarnigsDisclaimerShown;
    }

    public function setIsEarnigsDisclaimerShown(string $isEarnigsDisclaimerShown): self
    {
        $this->isEarnigsDisclaimerShown = $isEarnigsDisclaimerShown;

        return $this;
    }

    public function getAuthKey(): string
    {
        return $this->authKey;
    }

    public function setAuthKey(string $authKey): self
    {
        $this->authKey = $authKey;

        return $this;
    }
}
