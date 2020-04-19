<?php

namespace Clean\Interfaces\Customer;

use App\Http\Controllers\Controller;
use Clean\Domain\Customer\CustomerFactory;
use Clean\Domain\Customer\CustomerModel;
use Clean\Persistence\Customer\CustomerRepository;

/**
 * Class CustomerController
 *
 * @package Clean\Interfaces\Customer
 */
class CustomerController extends Controller
{
    public function __invoke()
    {
        $customerFactory = new CustomerFactory();
        $customerRepository = new CustomerRepository();

//        $customer = $customerFactory->create( 'Customer #5' );
//        $customerRepository->add( $customer );
        
//        var_dump( $customer );

        return view( 'welcome' );
    }
}
