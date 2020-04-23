<?php

namespace Clean\Application\Sales\Queries\GetSaleList;

use Illuminate\Support\Collection;

/**
 * Interface GetSaleListInterface
 *
 * @package Clean\Application\Sales\Queries\GetSaleList
 */
interface GetSaleListInterface
{
    /**
     * @return Collection
     */
    public function execute(): Collection;
}
