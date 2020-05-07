<?php

namespace Clean\Application\Customers\Queries\GetCustomerList;

use Clean\Domain\Customers\CustomerInterface;
use Clean\Domain\Customers\CustomerRepositoryInterface;
use Illuminate\Support\Collection;

/**
 * Class GetCustomerList
 *
 * @package Clean\Application\Customers\Queries\GetCustomerList
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

            $customerModel = new GetCustomerModel();
            $customerModel->id = $customer->identity();
            $customerModel->name = $customer->getName();

            return $customerModel;

        } );
    }
}
