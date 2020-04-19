<?php

namespace Clean\Interfaces\Customer;

use App\Http\Controllers\Controller;
use Clean\Application\Customer\Query\GetCustomerList\GetCustomerListInterface;

/**
 * Class CustomerController
 *
 * @package Clean\Interfaces\Customer
 */
class CustomerController extends Controller
{
    /**
     * @var GetCustomerListInterface
     */
    private $customerList;

    /**
     * CustomerController constructor.
     *
     * @param GetCustomerListInterface $customerList
     */
    public function __construct( GetCustomerListInterface $customerList )
    {
        $this->customerList = $customerList;
    }

    public function __invoke()
    {
        return view( 'welcome' );
    }
}
