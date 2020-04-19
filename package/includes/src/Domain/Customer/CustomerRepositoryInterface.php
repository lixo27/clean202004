<?php

namespace Clean\Domain\Customer;

use Illuminate\Support\Collection;

/**
 * Interface CustomerRepositoryInterface
 *
 * @package Clean\Domain\Customer
 */
interface CustomerRepositoryInterface
{
    /**
     * @return Collection
     */
    public function all(): Collection;
}
