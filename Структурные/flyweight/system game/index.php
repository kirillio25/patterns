<?php

require_once 'TreeFactory.php';
require_once 'Tree.php';

// Создаём деревья с разными позициями, но общими внешними данными
$trees = [];

$trees[] = new Tree(10, 20, 0, TreeFactory::getTreeType("Сосна", "Зелёный", "Хвоя"));
$trees[] = new Tree(15, 25, 0, TreeFactory::getTreeType("Сосна", "Зелёный", "Хвоя"));
$trees[] = new Tree(50, 75, 0, TreeFactory::getTreeType("Берёза", "Белый", "Кора"));
$trees[] = new Tree(100, 200, 0, TreeFactory::getTreeType("Сосна", "Зелёный", "Хвоя"));
$trees[] = new Tree(300, 400, 0, TreeFactory::getTreeType("Клён", "Красный", "Листья"));

// Отображаем деревья
foreach ($trees as $tree) {
    $tree->display();
}
