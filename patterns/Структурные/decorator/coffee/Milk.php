<?php

namespace Структурные\decorator\coffee;
use AddOnDecorator;

require_once 'AddOnDecorator.php';

class Milk extends AddOnDecorator
{
    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ", Молоко";
    }

    public function getCost(): int
    {
        return $this->beverage->getCost() + 30; // Молоко добавляет 30 ₽
    }
}
