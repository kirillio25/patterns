<?php

// Подключение интерфейса
require_once 'Handler.php';

// Подключение абстрактного класса и обработчиков
require_once 'AbstractHandler.php';
require_once 'OperatorHandler.php';
require_once 'SpecialistHandler.php';
require_once 'ManagerHandler.php';

// Создаём обработчики
$operator = new OperatorHandler();
$specialist = new SpecialistHandler();
$manager = new ManagerHandler();

// Настраиваем цепочку
$operator->setNext($specialist)->setNext($manager);

// Список запросов
$requests = [
    "Как восстановить пароль?",
    "Ошибка при установке программы",
    "Сбой в серверной инфраструктуре",
    "Неизвестный запрос"
];

foreach ($requests as $request) {
    echo "Запрос: {$request}\n";
    $response = $operator->handle($request);
    if ($response) {
        echo "Ответ: {$response}\n";
    } else {
        echo "Ответ: Никто не смог обработать запрос.\n";
    }
    echo str_repeat("-", 20) . "\n";
}
