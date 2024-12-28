<?php

namespace Поведенческий\Strategy\расчёта use ShippingStrategy;

стоимости;
require_once 'Strategy.php';

class StandardShipping implements ShippingStrategy
{
    public function calculateShippingCost(float $weight, string $destination): float
    {
        $baseCost = 5.00;
        $weightCost = $weight * 0.5;  // $0.5 за кг
        return $baseCost + $weightCost;
    }
}
