<?php declare(strict_types=1);

namespace Heptacom\DigiStore24\Model;

class ListEticketsResponse
{
    /**
     * @var string
     */
    protected $apiVersion;

    /**
     * @var string
     */
    protected $currentTime;

    /**
     * @var string
     */
    protected $timezone;

    /**
     * @var string
     */
    protected $utcOffset;

    /**
     * @var string
     */
    protected $result = 'success';

    /**
     * @var ListEticketsResponseData
     */
    protected $data;

    public function getApiVersion(): string
    {
        return $this->apiVersion;
    }

    public function setApiVersion(string $apiVersion): self
    {
        $this->apiVersion = $apiVersion;

        return $this;
    }

    public function getCurrentTime(): string
    {
        return $this->currentTime;
    }

    public function setCurrentTime(string $currentTime): self
    {
        $this->currentTime = $currentTime;

        return $this;
    }

    public function getTimezone(): string
    {
        return $this->timezone;
    }

    public function setTimezone(string $timezone): self
    {
        $this->timezone = $timezone;

        return $this;
    }

    public function getUtcOffset(): string
    {
        return $this->utcOffset;
    }

    public function setUtcOffset(string $utcOffset): self
    {
        $this->utcOffset = $utcOffset;

        return $this;
    }

    public function getResult(): string
    {
        return $this->result;
    }

    public function setResult(string $result): self
    {
        $this->result = $result;

        return $this;
    }

    public function getData(): ListEticketsResponseData
    {
        return $this->data;
    }

    public function setData(ListEticketsResponseData $data): self
    {
        $this->data = $data;

        return $this;
    }
}
