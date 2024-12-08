<?php

require_once 'VendingMachine.php';

$vendingMachine = new VendingMachine(2);

// Операции с автоматом
$vendingMachine->insertCoin();
$vendingMachine->selectDrink();

$vendingMachine->insertCoin();
$vendingMachine->ejectCoin();

$vendingMachine->insertCoin();
$vendingMachine->selectDrink();

$vendingMachine->insertCoin(); // Попытка добавить монету, когда автомат пуст
$vendingMachine->selectDrink(); // Попытка выбрать напиток
