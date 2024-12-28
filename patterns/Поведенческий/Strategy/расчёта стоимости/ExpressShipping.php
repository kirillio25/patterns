<?php

namespace Поведенческий\Strategy\расчёта use ShippingStrategy;

стоимости;
require_once 'Strategy.php';

class ExpressShipping implements ShippingStrategy
{
    public function calculateShippingCost(float $weight, string $destination): float
    {
        $baseCost = 10.00;
        $weightCost = $weight * 1.5;  // $1.5 за кг для экспресс-доставки
        return $baseCost + $weightCost;
    }
}
