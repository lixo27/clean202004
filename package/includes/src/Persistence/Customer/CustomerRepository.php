<?php

namespace Clean\Persistence\Customer;

use Clean\Domain\Customer\CustomerModel;
use Clean\Domain\Customer\CustomerRepositoryInterface;
use Illuminate\Support\Collection;

/**
 * Class CustomerRepository
 *
 * @package Clean\Persistence\Customer
 */
class CustomerRepository implements CustomerRepositoryInterface
{
    public function all(): Collection
    {
        return CustomerModel::all();
    }
}
