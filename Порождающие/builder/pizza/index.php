<?php
require_once 'builder/ConcretePizzaBuilder.php';
require_once 'director/PizzaDirector.php';

// Пример использования
$builder = new ConcretePizzaBuilder();
$director = new PizzaDirector($builder);

$margherita = $director->makeMargherita();
echo "Margherita:\n";
$margherita->showPizza();

echo "\n";

$pepperoni = $director->makePepperoni();
echo "Pepperoni:\n";
$pepperoni->showPizza();
