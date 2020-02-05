<?php declare(strict_types=1);

namespace Heptacom\DigiStore24\Model;

class ListConversionToolsCountdown
{
    /**
     * @var string
     */
    protected $id;

    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): self
    {
        $this->id = $id;

        return $this;
    }
}
