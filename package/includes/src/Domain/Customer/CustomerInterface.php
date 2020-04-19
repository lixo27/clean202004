<?php

namespace Clean\Domain\Customer;

use Clean\Domain\Common\EntityInterface;

/**
 * Interface CustomerInterface
 *
 * @package Clean\Domain\Customer
 */
interface CustomerInterface extends EntityInterface
{
    /**
     * @return string
     */
    public function getName(): string;
}
