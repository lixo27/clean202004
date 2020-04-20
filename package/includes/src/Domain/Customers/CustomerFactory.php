<?php

namespace Clean\Domain\Customers;

/**
 * Class CustomerFactory
 *
 * @package Clean\Domain\Customers
 */
class CustomerFactory implements CustomerFactoryInterface
{
    /**
     * @param string $name
     *
     * @return CustomerInterface
     */
    public function create( string $name ): CustomerInterface
    {
        $customer = new CustomerModel();
        $customer->name = $name;

        return $customer;
    }
}
