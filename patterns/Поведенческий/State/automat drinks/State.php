<?php

// Интерфейс состояния
namespace Поведенческий\State\automat drinks;

interface State
{
    public function insertCoin(): void;

    public function ejectCoin(): void;

    public function selectDrink(): void;

    public function dispense(): void;
}
