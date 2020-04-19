<?php

namespace Clean\Interfaces\Customer;

use App\Http\Controllers\Controller;
use Clean\Domain\Customer\CustomerInterface;
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
        $customerRepository->all()->each( function ( CustomerInterface $customer ) {
            echo $customer->getName();
            echo '<br>';
        } );

        return view( 'welcome' );
    }
}
