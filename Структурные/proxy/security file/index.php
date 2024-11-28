<?php

require_once 'FileProxy.php';

// Пользователь с ролью "user"
$userProxy = new FileProxy("user");
echo "=== Действия пользователя ===\n";
$userProxy->readFile("file1.txt");
$userProxy->deleteFile("file1.txt");

// Пользователь с ролью "admin"
$adminProxy = new FileProxy("admin");
echo "\n=== Действия администратора ===\n";
$adminProxy->readFile("file2.txt");
$adminProxy->deleteFile("file2.txt");
