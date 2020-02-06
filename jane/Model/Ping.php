<?php declare(strict_types=1);

namespace Heptacom\DigiStore24\Model;

class Ping
{
    /**
     * @var string
     */
    protected $serverTime;

    public function getServerTime(): string
    {
        return $this->serverTime;
    }

    public function setServerTime(string $serverTime): self
    {
        $this->serverTime = $serverTime;

        return $this;
    }
}
