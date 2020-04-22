<?php

namespace Clean\Application\Customers\Queries\GetCustomerList;

use Illuminate\Support\Collection;

/**
 * Interface GetCustomerListInterface
 *
 * @package Clean\Application\Customers\Queries\GetCustomerList
 */
interface GetCustomerListInterface
{
    /**
     * @return Collection
     */
    public function execute(): Collection;
}
