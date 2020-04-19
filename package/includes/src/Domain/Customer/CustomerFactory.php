<?php

namespace Clean\Domain\Customer;

/**
 * Class CustomerFactory
 *
 * @package Clean\Domain\Customer
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
