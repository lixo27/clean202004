<?php

namespace Clean\Domain\Customer;

use Clean\Domain\Common\AbstractModel;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomerModel
 *
 * @package Clean\Domain\Customer
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
