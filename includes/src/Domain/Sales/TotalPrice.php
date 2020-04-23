<?php

namespace Clean\Domain\Sales;

/**
 * Interface TotalPrice
 *
 * @package Clean\Domain\Sales
 */
class TotalPrice
{
    /**
     * @var float
     */
    private $value;

    /**
     * TotalPrice constructor.
     *
     * @param float $unitPrice
     * @param int   $quantity
     */
    public function __construct( float $unitPrice, int $quantity = 1 )
    {
        $this->value = floatval( $unitPrice * $quantity );
    }

    /**
     * @return float
     */
    public function getValue(): float
    {
        return $this->value;
    }
}
