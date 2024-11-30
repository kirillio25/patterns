<?php

require_once 'Light.php';
require_once 'Music.php';
require_once 'Temperature.php';
require_once 'LightCommand.php';
require_once 'MusicCommand.php';
require_once 'TemperatureCommand.php';
require_once 'RemoteControl.php';

// Создаём устройства
$light = new Light();
$music = new Music();
$temperature = new Temperature();

// Создаём команды
$lightCommand = new LightCommand($light);
$musicCommand = new MusicCommand($music);
$temperatureCommand = new TemperatureCommand($temperature);

// Создаём пульт
$remote = new RemoteControl();

// Выполняем команды
$remote->sendCommand($lightCommand);      // Включить свет
$remote->sendCommand($musicCommand);      // Включить музыку
$remote->sendCommand($temperatureCommand); // Увеличить температуру

// Отменяем последнюю команду
$remote->undoLastCommand();               // Уменьшить температуру
$remote->undoLastCommand();               // Выключить музыку
$remote->undoLastCommand();               // Выключить свет
$remote->undoLastCommand();               // Нет команд для отмены
