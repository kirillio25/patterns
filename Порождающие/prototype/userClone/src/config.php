<?php
// Включаем отображение ошибок
error_reporting(E_ALL);
ini_set('display_errors', 1);


spl_autoload_register(function ($class) {
    $path = __DIR__ . '/../' . str_replace('\\', '/', $class) . '.php';
    if (file_exists($path)) {
        require_once $path;
    }
});
