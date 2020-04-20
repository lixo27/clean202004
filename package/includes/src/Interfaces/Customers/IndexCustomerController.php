<?php

namespace Clean\Interfaces\Customers;

use App\Http\Controllers\Controller;
use Clean\Application\Customers\Queries\GetCustomerList\GetCustomerListInterface;

/**
 * Class IndexCustomerController
 *
 * @package Clean\Interfaces\Customers
 */
class IndexCustomerController extends Controller
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
        $customers = $this->customerList->execute();

        return view( 'customer.index', [
            'customers' => $customers,
        ] );
    }
}
