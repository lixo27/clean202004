<?php

namespace Clean\Domain\Customer;

use Clean\Domain\Common\RepositoryInterface;

/**
 * Interface CustomerRepositoryInterface
 *
 * @package Clean\Domain\Customer
 */
interface CustomerRepositoryInterface extends RepositoryInterface
{
    /**
     * @param CustomerInterface $customer
     *
     * @return bool
     */
    public function add( CustomerInterface $customer ): bool;
}
