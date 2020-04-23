<?php

namespace Clean\Domain\Customers;

use Illuminate\Support\Collection;

/**
 * Interface CustomerRepositoryInterface
 *
 * @package Clean\Domain\Customers
 */
interface CustomerRepositoryInterface
{
    /**
     * @param int $identity
     *
     * @return CustomerInterface
     */
    public function get( int $identity ): CustomerInterface;

    /**
     * @return Collection
     */
    public function all(): Collection;
}
