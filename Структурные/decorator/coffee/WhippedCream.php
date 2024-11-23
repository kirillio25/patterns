<?php

require_once 'AddOnDecorator.php';

class WhippedCream extends AddOnDecorator
{
    public function getDescription(): string
    {
        return $this->beverage->getDescription() . ", Взбитые сливки";
    }

    public function getCost(): int
    {
        return $this->beverage->getCost() + 50; // Взбитые сливки добавляют 50 ₽
    }
}
