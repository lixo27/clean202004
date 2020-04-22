<?php

namespace Clean\Interfaces\Products;

use Clean\Application\Customers\Queries\GetCustomerList\GetCustomerListInterface;
use Clean\Application\Products\Queries\GetProductList\GetProductListInterface;
use Illuminate\Routing\Controller;

/**
 * Class IndexProductController
 *
 * @package Clean\Interfaces\Products
 */
class IndexProductController extends Controller
{
    /**
     * @var GetProductListInterface
     */
    private $productList;

    /**
     * IndexProductController constructor.
     *
     * @param GetProductListInterface $productList
     */
    public function __construct( GetProductListInterface $productList )
    {
        $this->productList = $productList;
    }

    public function __invoke()
    {
        $products = $this->productList->execute();

        return view( 'clean::product.index', [
            'products' => $products,
        ] );
    }
}
