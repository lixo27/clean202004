<?php

namespace Clean\Domain\Customer;

/**
 * Interface CustomerFactoryInterface
 *
 * @package Clean\Domain\Customer
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
