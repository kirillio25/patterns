<?php

require_once 'Beverage.php';

class Americano implements Beverage
{
    public function getDescription(): string
    {
        return "Американо";
    }

    public function getCost(): int
    {
        return 80; // Стоимость американо
    }
}
