<?php

// Подключение интерфейсов
require_once 'FurnitureFactory.php';
require_once 'Chair.php';
require_once 'Table.php';
require_once 'Sofa.php';

// Подключение классической мебели
require_once 'classic/ClassicFurnitureFactory.php';
require_once 'classic/ClassicChair.php';
require_once 'classic/ClassicTable.php';
require_once 'classic/ClassicSofa.php';

// Подключение современной мебели
require_once 'modern/ModernFurnitureFactory.php';
require_once 'modern/ModernChair.php';
require_once 'modern/ModernTable.php';
require_once 'modern/ModernSofa.php';

// Подключение викторианской мебели (если используется)
require_once 'victorian/VictorianFurnitureFactory.php';
require_once 'victorian/VictorianChair.php';
require_once 'victorian/VictorianTable.php';
require_once 'victorian/VictorianSofa.php';

// Функция для выбора фабрики
function getFactory(string $style): FurnitureFactory {
    switch ($style) {
        case 'classic':
            return new ClassicFurnitureFactory();
        case 'modern':
            return new ModernFurnitureFactory();
        case 'victorian':
            return new VictorianFurnitureFactory();
        default:
            throw new Exception("Неизвестный стиль мебели: $style");
    }
}

// Пример использования
$style = 'classic'; // Выбор стиля: classic, modern, victorian
$factory = getFactory($style);

$chair = $factory->createChair();
$table = $factory->createTable();
$sofa = $factory->createSofa();

echo $chair->getDescription() . PHP_EOL;
echo $table->getDescription() . PHP_EOL;
echo $sofa->getDescription() . PHP_EOL;
