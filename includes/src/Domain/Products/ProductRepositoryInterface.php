<?php

namespace Clean\Domain\Products;

use Illuminate\Support\Collection;

/**
 * Interface ProductRepositoryInterface
 *
 * @package Clean\Domain\Products
 */
interface ProductRepositoryInterface
{
    /**
     * @param int $identity
     *
     * @return ProductInterface
     */
    public function get( int $identity ): ProductInterface;
    
    /**
     * @return Collection
     */
    public function all(): Collection;
}
