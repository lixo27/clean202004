<?php

namespace Clean\Domain\Sales;

use Illuminate\Support\Collection;

/**
 * Interface SaleRepositoryInterface
 *
 * @package Clean\Domain\Sales
 */
interface SaleRepositoryInterface
{
    /**
     * @param SaleInterface $sale
     *
     * @return bool
     */
    public function add( SaleInterface $sale ): bool;

    /**
     * @param int $identity
     *
     * @return SaleInterface
     */
    public function get( int $identity ): SaleInterface;

    /**
     * @return Collection
     */
    public function all(): Collection;
}
