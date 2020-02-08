<?php declare(strict_types=1);

namespace Heptacom\DigiStore24\Model;

class ListProductsResponseData
{
    /**
     * @var ListProducts[]
     */
    protected $products;

    /**
     * @return ListProducts[]
     */
    public function getProducts(): array
    {
        return $this->products;
    }

    /**
     * @param ListProducts[] $products
     */
    public function setProducts(array $products): self
    {
        $this->products = $products;

        return $this;
    }
}
