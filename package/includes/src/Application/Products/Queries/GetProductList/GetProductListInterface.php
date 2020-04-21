<?php

namespace Clean\Application\Products\Queries\GetProductList;

use Illuminate\Support\Collection;

/**
 * Interface GetProductListInterface
 *
 * @package Clean\Application\Products\Queries\GetProductList
 */
interface GetProductListInterface
{
    /**
     * @return Collection
     */
    public function execute(): Collection;
}
