<?php

namespace Clean\Domain\Customers;

use Clean\Domain\Common\AbstractModel;

/**
 * Class CustomerModel
 *
 * @package Clean\Domain\Customers
 */
class CustomerModel extends AbstractModel implements CustomerInterface
{
    protected $table = 'customers';

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
}
