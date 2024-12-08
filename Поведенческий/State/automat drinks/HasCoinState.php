<?php

require_once 'State.php';

class HasCoinState implements State
{
    private $vendingMachine;

    public function __construct($vendingMachine)
    {
        $this->vendingMachine = $vendingMachine;
    }

    public function insertCoin(): void
    {
        echo "Монета уже внесена.\n";
    }

    public function ejectCoin(): void
    {
        echo "Монета возвращена.\n";
        $this->vendingMachine->setState($this->vendingMachine->getNoCoinState());
    }

    public function selectDrink(): void
    {
        echo "Вы выбрали напиток.\n";
        if ($this->vendingMachine->getStock() > 0) {
            $this->vendingMachine->setState($this->vendingMachine->getNoCoinState());
            $this->vendingMachine->dispense();
        } else {
            echo "Автомат пуст.\n";
            $this->vendingMachine->setState($this->vendingMachine->getSoldOutState());
        }
    }

    public function dispense(): void
    {
        echo "Сначала выберите напиток.\n";
    }
}
