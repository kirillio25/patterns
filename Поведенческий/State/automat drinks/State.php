<?php

// Интерфейс состояния
interface State
{
    public function insertCoin(): void;
    public function ejectCoin(): void;
    public function selectDrink(): void;
    public function dispense(): void;
}
