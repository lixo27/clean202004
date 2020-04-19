<?php

namespace Clean\Domain\Customer;

use Clean\Domain\Common\EntityInterface;
use Illuminate\Database\Eloquent\Model;

/**
 * Class CustomerModel
 *
 * @package Clean\Domain\Customer
 */
class CustomerModel extends Model implements CustomerInterface
{
    protected $table = 'customers';

    public function identity(): int
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getInternalModel(): Model
    {
        return $this;
    }
}
