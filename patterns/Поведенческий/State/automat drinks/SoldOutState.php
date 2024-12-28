<?php

namespace Поведенческий\State\automat use State;

drinks;
require_once 'State.php';

class SoldOutState implements State
{
    private $vendingMachine;

    public function __construct($vendingMachine)
    {
        $this->vendingMachine = $vendingMachine;
    }

    public function insertCoin(): void
    {
        echo "Автомат пуст. Не могу принять монету.\n";
    }

    public function ejectCoin(): void
    {
        echo "Монета не внесена, нечего вернуть.\n";
    }

    public function selectDrink(): void
    {
        echo "Автомат пуст. Выберите другой автомат.\n";
    }

    public function dispense(): void
    {
        echo "Автомат пуст.\n";
    }
}
