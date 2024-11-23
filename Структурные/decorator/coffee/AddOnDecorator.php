<?php

require_once 'Beverage.php';

abstract class AddOnDecorator implements Beverage
{
    protected Beverage $beverage;

    public function __construct(Beverage $beverage)
    {
        $this->beverage = $beverage;
    }

    abstract public function getDescription(): string;
    abstract public function getCost(): int;
}
