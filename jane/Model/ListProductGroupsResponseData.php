<?php declare(strict_types=1);

namespace Heptacom\DigiStore24\Model;

class ListProductGroupsResponseData
{
    /**
     * @var mixed[]
     */
    protected $items;

    /**
     * @return mixed[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param mixed[] $items
     */
    public function setItems(array $items): self
    {
        $this->items = $items;

        return $this;
    }
}
