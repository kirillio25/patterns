<?php

// Интерфейс стратегии
interface ShippingStrategy
{
    public function calculateShippingCost(float $weight, string $destination): float;
}
