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
     * @return Collection
     */
    public function all(): Collection;
}
