<?php

namespace Clean\Domain\Customers;

/**
 * Interface CustomerFactoryInterface
 *
 * @package Clean\Domain\Customers
 */
interface CustomerFactoryInterface
{
    /**
     * @param string $name
     *
     * @return CustomerInterface
     */
    public function create( string $name ): CustomerInterface;
}
