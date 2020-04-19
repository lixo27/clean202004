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
        $customerRepository = new CustomerRepository();

        echo count( $customerRepository->all() );
        echo '<hr>';

//        $customerFactory = new CustomerFactory();
//        $customer = $customerFactory->create( 'Customer #6' );
//        $customerRepository->add( $customer );

//        var_dump( $customer );

        return view( 'welcome' );
    }
}
