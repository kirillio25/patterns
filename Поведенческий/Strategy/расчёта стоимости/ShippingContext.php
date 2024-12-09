<?php

require_once 'Strategy.php';

class ShippingContext
{
    private ShippingStrategy $strategy;

    public function __construct(ShippingStrategy $strategy)
    {
        $this->strategy = $strategy;
    }

    public function setStrategy(ShippingStrategy $strategy): void
    {
        $this->strategy = $strategy;
    }

    public function calculateShippingCost(float $weight, string $destination): float
    {
        return $this->strategy->calculateShippingCost($weight, $destination);
    }
}
