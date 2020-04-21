<?php

namespace Clean\Domain\Products;

use Clean\Domain\Common\EntityInterface;

/**
 * Interface ProductInterface
 *
 * @package Clean\Domain\Products
 */
interface ProductInterface extends EntityInterface
{
    /**
     * @return string
     */
    public function getName(): string;

    /**
     * @return float
     */
    public function getPrice(): float;
}
