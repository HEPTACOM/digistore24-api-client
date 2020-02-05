<?php declare(strict_types=1);

namespace Heptacom\DigiStore24\Model;

class ListConversionToolsResponseData
{
    /**
     * @var ListConversionToolsTrustBadge[]|null
     */
    protected $trustBadges;

    /**
     * @var ListConversionToolsCountdown[]|null
     */
    protected $countdowns;

    /**
     * @var ListConversionToolsSocialproofBubble[]|null
     */
    protected $socialproofBubbles;

    /**
     * @var ListConversionToolsSocialproofBox[]|null
     */
    protected $socialproofBoxes;

    /**
     * @var ListConversionToolsSmartupgrade[]|null
     */
    protected $smartupgrade;

    /**
     * @return ListConversionToolsTrustBadge[]|null
     */
    public function getTrustBadges(): ?array
    {
        return $this->trustBadges;
    }

    /**
     * @param ListConversionToolsTrustBadge[]|null $trustBadges
     */
    public function setTrustBadges(?array $trustBadges): self
    {
        $this->trustBadges = $trustBadges;

        return $this;
    }

    /**
     * @return ListConversionToolsCountdown[]|null
     */
    public function getCountdowns(): ?array
    {
        return $this->countdowns;
    }

    /**
     * @param ListConversionToolsCountdown[]|null $countdowns
     */
    public function setCountdowns(?array $countdowns): self
    {
        $this->countdowns = $countdowns;

        return $this;
    }

    /**
     * @return ListConversionToolsSocialproofBubble[]|null
     */
    public function getSocialproofBubbles(): ?array
    {
        return $this->socialproofBubbles;
    }

    /**
     * @param ListConversionToolsSocialproofBubble[]|null $socialproofBubbles
     */
    public function setSocialproofBubbles(?array $socialproofBubbles): self
    {
        $this->socialproofBubbles = $socialproofBubbles;

        return $this;
    }

    /**
     * @return ListConversionToolsSocialproofBox[]|null
     */
    public function getSocialproofBoxes(): ?array
    {
        return $this->socialproofBoxes;
    }

    /**
     * @param ListConversionToolsSocialproofBox[]|null $socialproofBoxes
     */
    public function setSocialproofBoxes(?array $socialproofBoxes): self
    {
        $this->socialproofBoxes = $socialproofBoxes;

        return $this;
    }

    /**
     * @return ListConversionToolsSmartupgrade[]|null
     */
    public function getSmartupgrade(): ?array
    {
        return $this->smartupgrade;
    }

    /**
     * @param ListConversionToolsSmartupgrade[]|null $smartupgrade
     */
    public function setSmartupgrade(?array $smartupgrade): self
    {
        $this->smartupgrade = $smartupgrade;

        return $this;
    }
}
