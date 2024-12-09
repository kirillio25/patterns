<?php

require_once 'Strategy.php';

class PickupShipping implements ShippingStrategy
{
    public function calculateShippingCost(float $weight, string $destination): float
    {
        return 0.00;  // Самовывоз — бесплатно
    }
}
