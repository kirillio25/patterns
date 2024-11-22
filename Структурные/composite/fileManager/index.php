<?php

require_once 'File.php';
require_once 'Folder.php';

// Создаём корневую папку
$rootFolder = new Folder('RootFolder');

// Добавляем файлы в корневую папку
$rootFolder->add(new File('file1.txt', 10));
$rootFolder->add(new File('file2.txt', 20));

// Создаём подпапку и добавляем файлы
$subFolder1 = new Folder('SubFolder1');
$subFolder1->add(new File('file3.txt', 15));
$subFolder1->add(new File('file4.txt', 5));

// Добавляем подпапку в корневую папку
$rootFolder->add($subFolder1);

// Создаём вложенную структуру
$subSubFolder = new Folder('SubSubFolder');
$subSubFolder->add(new File('file5.txt', 25));

$subFolder2 = new Folder('SubFolder2');
$subFolder2->add($subSubFolder);
$subFolder2->add(new File('file6.txt', 30));

// Добавляем вторую подпапку в корневую папку
$rootFolder->add($subFolder2);

// Подсчёт общего размера
echo "Общий размер файлов в папке '{$rootFolder->getName()}': " . $rootFolder->getSize() . " KB\n";

// Подсчёт общего количества файлов
echo "Общее количество файлов в папке '{$rootFolder->getName()}': " . $rootFolder->countFiles() . "\n";
