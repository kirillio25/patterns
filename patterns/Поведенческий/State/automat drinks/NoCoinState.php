<?php

namespace Поведенческий\State\automat use State;

drinks;
require_once 'State.php';

class NoCoinState implements State
{
    private $vendingMachine;

    public function __construct($vendingMachine)
    {
        $this->vendingMachine = $vendingMachine;
    }

    public function insertCoin(): void
    {
        echo "Монета внесена.\n";
        $this->vendingMachine->setState($this->vendingMachine->getHasCoinState());
    }

    public function ejectCoin(): void
    {
        echo "Монета не внесена, нечего вернуть.\n";
    }

    public function selectDrink(): void
    {
        echo "Сначала внесите монету.\n";
    }

    public function dispense(): void
    {
        echo "Сначала внесите монету.\n";
    }
}
