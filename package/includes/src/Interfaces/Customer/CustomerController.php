<?php

namespace Clean\Interfaces\Customer;

use App\Http\Controllers\Controller;
use Clean\Domain\Customer\CustomerFactory;
use Clean\Domain\Customer\CustomerModel;

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
        $customer = $customerFactory->create('Customer #4');

//        $customer->save();

        var_dump( $customer );

        return view( 'welcome' );
    }
}
