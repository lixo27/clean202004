<?php

namespace Clean\Persistence\Customer;

use Clean\Domain\Customer\CustomerInterface;
use Clean\Domain\Customer\CustomerModel;
use Clean\Domain\Customer\CustomerRepositoryInterface;
use Clean\Persistence\Common\AbstractRepository;

/**
 * Class CustomerRepository
 *
 * @package Clean\Persistence\Customer
 */
class CustomerRepository extends AbstractRepository implements CustomerRepositoryInterface
{
    protected $internalModelClass = CustomerModel::class;

    /**
     * @param CustomerInterface $customer
     *
     * @return bool
     */
    public function add( CustomerInterface $customer ): bool
    {
        return $customer->getInternalModel()->save();
    }
}
