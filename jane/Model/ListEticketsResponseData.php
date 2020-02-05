<?php declare(strict_types=1);

namespace Heptacom\DigiStore24\Model;

class ListEticketsResponseData
{
    /**
     * @var ListEtickets[]
     */
    protected $etickets;

    /**
     * @return ListEtickets[]
     */
    public function getEtickets(): array
    {
        return $this->etickets;
    }

    /**
     * @param ListEtickets[] $etickets
     */
    public function setEtickets(array $etickets): self
    {
        $this->etickets = $etickets;

        return $this;
    }
}
