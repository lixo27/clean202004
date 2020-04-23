<?php

namespace Clean\Interfaces\Sales;

use Clean\Application\Sales\Queries\GetSaleDetail\GetSaleDetailInterface;
use Illuminate\Routing\Controller;

/**
 * Class DetailSaleController
 *
 * @package Clean\Interfaces\Sales
 */
class DetailSaleController extends Controller
{
    /**
     * @var GetSaleDetailInterface
     */
    private $saleDetail;

    /**
     * DetailSaleController constructor.
     *
     * @param GetSaleDetailInterface $saleDetail
     */
    public function __construct( GetSaleDetailInterface $saleDetail )
    {
        $this->saleDetail = $saleDetail;
    }

    public function __invoke( int $id )
    {
        $sale = $this->saleDetail->execute( $id );

        return view( 'clean::sale.detail', [
            'sale' => $sale,
        ] );
    }
}
