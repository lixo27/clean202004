<?php

namespace Clean\Domain\Products;

/**
 * Class ProductFactory
 *
 * @package Clean\Domain\Products
 */
class ProductFactory implements ProductFactoryInterface
{
    /**
     * @param string $name
     * @param float  $price
     *
     * @return ProductInterface
     */
    public function create( string $name, float $price ): ProductInterface
    {
        $product = new ProductModel();
        $product->name = $name;
        $product->price = $price;

        return $product;
    }
}
