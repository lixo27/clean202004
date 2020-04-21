<?php

namespace Clean\Domain\Products;

/**
 * Interface ProductFactoryInterface
 *
 * @package Clean\Domain\Products
 */
interface ProductFactoryInterface
{
    /**
     * @param string $name
     * @param float  $price
     *
     * @return ProductInterface
     */
    public function create( string $name, float $price ): ProductInterface;
}
