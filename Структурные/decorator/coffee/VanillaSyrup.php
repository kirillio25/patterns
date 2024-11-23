<?php

require_once 'AddOnDecorator.php';

class VanillaSyrup extends AddOnDecorator
{
    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ", Ванильный сироп";
    }

    public function getCost(): int
    {
        return $this->beverage->getCost() + 40; // Ванильный сироп добавляет 40 ₽
    }
}
