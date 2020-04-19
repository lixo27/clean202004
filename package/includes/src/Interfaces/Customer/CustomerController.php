<?php

namespace Clean\Interfaces\Customer;

use App\Http\Controllers\Controller;
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
        $customerModel = new CustomerModel();
        $customerModel->name = 'Customer #2';
//        $customerModel->save();

        var_dump( $customerModel );

        return view( 'welcome' );
    }
}
