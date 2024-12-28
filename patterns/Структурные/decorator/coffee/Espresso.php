<?php

namespace Структурные\decorator\coffee;
use Beverage;

require_once 'Beverage.php';

class Espresso implements Beverage
{
    public function getDescription(): string
    {
        return "Эспрессо";
    }

    public function getCost(): int
    {
        return 100; // Стоимость эспрессо
    }
}
