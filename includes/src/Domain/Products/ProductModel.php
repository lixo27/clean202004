<?php

namespace Clean\Domain\Products;

use Clean\Domain\Common\AbstractModel;

/**
 * Class ProductModel
 *
 * @package Clean\Domain\Products
 */
class ProductModel extends AbstractModel implements ProductInterface
{
    protected $table = 'products';

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @return float
     */
    public function getPrice(): float
    {
        return $this->price;
    }
}
