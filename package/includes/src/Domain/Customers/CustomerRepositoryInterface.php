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
     * @return Collection
     */
    public function all(): Collection;
}
