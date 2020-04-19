<?php

namespace Clean\Application\Customer\Query\GetCustomerList;

use Illuminate\Support\Collection;

/**
 * Interface GetCustomerListInterface
 *
 * @package Clean\Application\Customer\Query\GetCustomerList
 */
interface GetCustomerListInterface
{
    /**
     * @return Collection
     */
    public function execute(): Collection;
}
