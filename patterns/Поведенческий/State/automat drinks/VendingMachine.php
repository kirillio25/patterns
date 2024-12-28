<?php

namespace Поведенческий\State\automat use HasCoinState;
use NoCoinState;
use SoldOutState;
use State;

drinks;
require_once 'NoCoinState.php';
require_once 'HasCoinState.php';
require_once 'SoldOutState.php';

class VendingMachine
{
    private $noCoinState;
    private $hasCoinState;
    private $soldOutState;

    private $state;
    private $stock;

    public function __construct(int $stock)
    {
        $this->noCoinState = new NoCoinState($this);
        $this->hasCoinState = new HasCoinState($this);
        $this->soldOutState = new SoldOutState($this);

        $this->stock = $stock;
        $this->state = $stock > 0 ? $this->noCoinState : $this->soldOutState;
    }

    public function insertCoin(): void
    {
        $this->state->insertCoin();
    }

    public function ejectCoin(): void
    {
        $this->state->ejectCoin();
    }

    public function selectDrink(): void
    {
        $this->state->selectDrink();
    }

    public function dispense(): void
    {
        if ($this->stock > 0) {
            echo "Выдан напиток.\n";
            $this->stock--;
        } else {
            echo "Автомат пуст.\n";
        }
    }

    public function setState(State $state): void
    {
        $this->state = $state;
    }

    public function getNoCoinState(): State
    {
        return $this->noCoinState;
    }

    public function getHasCoinState(): State
    {
        return $this->hasCoinState;
    }

    public function getSoldOutState(): State
    {
        return $this->soldOutState;
    }

    public function getStock(): int
    {
        return $this->stock;
    }
}
