<?php

namespace Clean\Persistence\Products;

use Clean\Domain\Products\ProductModel;
use Clean\Domain\Products\ProductRepositoryInterface;
use Illuminate\Support\Collection;

/**
 * Class ProductRepository
 *
 * @package Clean\Persistence\Products
 */
class ProductRepository implements ProductRepositoryInterface
{
    /**
     * @return Collection
     */
    public function all(): Collection
    {
        return ProductModel::all();
    }
}
