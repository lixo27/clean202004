<?php

namespace Clean\Application\Customer\Query\GetCustomerList;

use Clean\Domain\Customer\CustomerInterface;
use Clean\Domain\Customer\CustomerRepositoryInterface;
use Illuminate\Support\Collection;

/**
 * Class GetCustomerList
 *
 * @package Clean\Application\Customer\Query\GetCustomerList
 */
class GetCustomerList implements GetCustomerListInterface
{
    /**
     * @var CustomerRepositoryInterface
     */
    private $customerRepsitory;

    /**
     * GetCustomerList constructor.
     *
     * @param CustomerRepositoryInterface $customerRepository
     */
    public function __construct( CustomerRepositoryInterface $customerRepository )
    {
        $this->customerRepsitory = $customerRepository;
    }

    /**
     * @return Collection
     */
    public function execute(): Collection
    {
        $customers = $this->customerRepsitory->all();
        return $customers->map( function ( CustomerInterface $customer ) {

            $customerModel = new \stdClass();
            $customerModel->id = $customer->identity();
            $customerModel->name = $customer->getName();

            return $customerModel;
            
        } );
    }
}
