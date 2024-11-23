<?php

require_once 'Espresso.php';
require_once 'Americano.php';
require_once 'Milk.php';
require_once 'VanillaSyrup.php';
require_once 'WhippedCream.php';

// Пример 1: Эспрессо с молоком и ванильным сиропом
$espresso = new Espresso();
$espressoWithMilk = new Milk($espresso);
$espressoWithMilkAndVanilla = new VanillaSyrup($espressoWithMilk);

echo "Напиток: " . $espressoWithMilkAndVanilla->getDescription() . "\n";
echo "Стоимость: " . $espressoWithMilkAndVanilla->getCost() . " ₽\n";

// Пример 2: Американо с взбитыми сливками
$americano = new Americano();
$americanoWithCream = new WhippedCream($americano);

echo "\nНапиток: " . $americanoWithCream->getDescription() . "\n";
echo "Стоимость: " . $americanoWithCream->getCost() . " ₽\n";
