<?php

namespace Поведенческий\Strategy\расчёта use ShippingStrategy;

стоимости;
require_once 'Strategy.php';

class PickupShipping implements ShippingStrategy
{
    public function calculateShippingCost(float $weight, string $destination): float
    {
        return 0.00;  // Самовывоз — бесплатно
    }
}
