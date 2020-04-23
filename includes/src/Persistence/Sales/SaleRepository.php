<?php

namespace Clean\Persistence\Sales;

use Clean\Domain\Sales\SaleInterface;
use Clean\Domain\Sales\SaleModel;
use Clean\Domain\Sales\SaleRepositoryInterface;
use Illuminate\Support\Collection;

/**
 * Class SaleRepository
 *
 * @package Clean\Persistence\Sales
 */
class SaleRepository implements SaleRepositoryInterface
{
    /**
     * @param SaleInterface $sale
     *
     * @return bool
     */
    public function add( SaleInterface $sale ): bool
    {
        return $sale->getInternalModel()->save();
    }

    /**
     * @param int $identity
     *
     * @return SaleInterface
     */
    public function get( int $identity ): SaleInterface
    {
        return SaleModel::find( $identity );
    }

    /**
     * @return Collection
     */
    public function all(): Collection
    {
        return SaleModel::all();
    }
}
