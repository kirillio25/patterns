<?php

require_once 'Editor.php';
require_once 'Caretaker.php';

// Создаём редактор и хранителя
$editor = new Editor();
$caretaker = new Caretaker();

// Работа с редактором
$editor->write("Первая строка текста.");
$caretaker->saveState($editor->save());

$editor->write("Вторая строка текста.");
$caretaker->saveState($editor->save());

$editor->write("Третья строка текста.");

// Выводим текущее состояние
echo "Текущее состояние:\n";
echo $editor->getContent();

// Восстанавливаем состояние
echo "\nВосстанавливаемся ко второму состоянию:\n";
$editor->restore($caretaker->getState(1));
echo $editor->getContent();

echo "\nВосстанавливаемся к первому состоянию:\n";
$editor->restore($caretaker->getState(0));
echo $editor->getContent();
