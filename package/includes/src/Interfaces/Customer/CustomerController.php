<?php

namespace Clean\Interfaces\Customer;

use App\Http\Controllers\Controller;

/**
 * Class CustomerController
 *
 * @package Clean\Interfaces\Customer
 */
class CustomerController extends Controller
{
    public function __invoke()
    {
        return view( 'welcome' );
    }
}
