<?php

namespace Clean\Interfaces\Customer;

use App\Http\Controllers\Controller;
use Clean\Domain\Customer\CustomerFactoryInterface;
use Clean\Domain\Customer\CustomerRepositoryInterface;

/**
 * Class CustomerController
 *
 * @package Clean\Interfaces\Customer
 */
class CustomerController extends Controller
{
    /**
     * @var CustomerFactoryInterface
     */
    private $customerFactory;

    /**
     * @var CustomerRepositoryInterface
     */
    private $customerRepository;

    /**
     * CustomerController constructor.
     *
     * @param CustomerFactoryInterface    $customerFactory
     * @param CustomerRepositoryInterface $customerRepository
     */
    public function __construct(
        CustomerFactoryInterface $customerFactory,
        CustomerRepositoryInterface $customerRepository
    )
    {
        $this->customerFactory = $customerFactory;
        $this->customerRepository = $customerRepository;
    }

    public function __invoke()
    {
        return view( 'welcome' );
    }
}
