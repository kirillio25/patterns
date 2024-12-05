<?php

require_once 'Mediator.php';
require_once 'User.php';

// Создаём чат-комнату
$chatRoom = new ChatRoom();

// Создаём пользователей
$user1 = new User("Alice");
$user2 = new User("Bob");
$user3 = new User("Charlie");

// Добавляем пользователей в чат
$chatRoom->addUser($user1);
$chatRoom->addUser($user2);
$chatRoom->addUser($user3);

// Отправляем сообщения
$user1->sendMessage("Привет всем!");
$user2->sendMessage("Привет, Alice!");
$user3->sendMessage("Как дела?");
