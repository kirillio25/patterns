<?php

// Интерфейс стратегии
namespace Поведенческий\Strategy\расчёта стоимости;

interface ShippingStrategy
{
    public function calculateShippingCost(float $weight, string $destination): float;
}
