<?php

namespace Clean\Domain\Customers;

use Clean\Domain\Common\EntityInterface;

/**
 * Interface CustomerInterface
 *
 * @package Clean\Domain\Customers
 */
interface CustomerInterface extends EntityInterface
{
    /**
     * @return string
     */
    public function getName(): string;
}
