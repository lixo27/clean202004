<?php

namespace Clean\Domain\Customer;

use Clean\Domain\Common\EntityInterface;
use Clean\Domain\Common\RepositoryInterface;

/**
 * Interface CustomerRepository
 *
 * @package Clean\Domain\Customer
 */
interface CustomerRepository extends RepositoryInterface
{
    /**
     * @return string
     */
    public function getName(): string;
}
