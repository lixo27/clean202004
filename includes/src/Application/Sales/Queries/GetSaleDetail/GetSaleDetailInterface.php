<?php

namespace Clean\Application\Sales\Queries\GetSaleDetail;

/**
 * Interface GetSaleDetailInterface
 *
 * @package Clean\Application\Sales\Queries\GetSaleDetail
 */
interface GetSaleDetailInterface
{
    /**
     * @param int $identity
     *
     * @return GetSaleDetailModel
     */
    public function execute( int $identity ): GetSaleDetailModel;
}
