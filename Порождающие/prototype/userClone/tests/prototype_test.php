<?php

require_once __DIR__ . '/../src/config.php';

use Models\User;
use Factories\UserFactory;

// Создаем прототипы пользователей
$adminPrototype = new User("Admin", 30, "Admin", ["email" => true, "sms" => false]);
$userPrototype = new User("User", 25, "User", ["email" => true, "sms" => true]);

// Создаем фабрику на основе прототипов
$factory = new UserFactory($adminPrototype, $userPrototype);

// Тестирование клонирования и изменения свойств
$newAdmin = $factory->createAdmin();
$newAdmin->name = "John";
$newAdmin->age = 40;

$newUser = $factory->createUser();
$newUser->name = "Alice";
$newUser->age = 22;

echo "Prototype Test - New Admin:\n";
print_r($newAdmin);

echo "\nPrototype Test - New User:\n";
print_r($newUser);
