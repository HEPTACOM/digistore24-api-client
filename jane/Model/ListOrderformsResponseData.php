<?php declare(strict_types=1);

namespace Heptacom\DigiStore24\Model;

class ListOrderformsResponseData
{
    /**
     * @var ListOrderforms[]
     */
    protected $orderforms;

    /**
     * @var string
     */
    protected $layout;

    /**
     * @return ListOrderforms[]
     */
    public function getOrderforms(): array
    {
        return $this->orderforms;
    }

    /**
     * @param ListOrderforms[] $orderforms
     */
    public function setOrderforms(array $orderforms): self
    {
        $this->orderforms = $orderforms;

        return $this;
    }

    public function getLayout(): string
    {
        return $this->layout;
    }

    public function setLayout(string $layout): self
    {
        $this->layout = $layout;

        return $this;
    }
}
