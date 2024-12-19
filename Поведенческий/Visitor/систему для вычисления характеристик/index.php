<?php

require_once 'Square.php';
require_once 'Circle.php';
require_once 'Triangle.php';
require_once 'AreaVisitor.php';
require_once 'PerimeterVisitor.php';

// Создаём фигуры
$square = new Square(4);
$circle = new Circle(3);
$triangle = new Triangle(3, 4, 5, 6);

// Создаём визиторов
$areaVisitor = new AreaVisitor();
$perimeterVisitor = new PerimeterVisitor();

// Рассчёт площади
echo "=== Площадь фигур ===\n";
$square->accept($areaVisitor);
$circle->accept($areaVisitor);
$triangle->accept($areaVisitor);

// Рассчёт периметра
echo "\n=== Периметр фигур ===\n";
$square->accept($perimeterVisitor);
$circle->accept($perimeterVisitor);
$triangle->accept($perimeterVisitor);
