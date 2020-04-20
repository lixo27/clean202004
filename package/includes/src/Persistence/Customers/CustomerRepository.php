<?php

namespace Clean\Persistence\Customers;

use Clean\Domain\Customers\CustomerModel;
use Clean\Domain\Customers\CustomerRepositoryInterface;
use Illuminate\Support\Collection;

/**
 * Class CustomerRepository
 *
 * @package Clean\Persistence\Customers
 */
class CustomerRepository implements CustomerRepositoryInterface
{
    /**
     * @return Collection
     */
    public function all(): Collection
    {
        return CustomerModel::all();
    }
}
