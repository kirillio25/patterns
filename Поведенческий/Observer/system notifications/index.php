<?php

require_once 'Observable.php';
require_once 'Observer.php';

// Создаём блог
$blog = new Blog();

// Создаём подписчиков
$subscriber1 = new Subscriber("Иван");
$subscriber2 = new Subscriber("Анна");
$subscriber3 = new Subscriber("Елена");

// Подписываем их на блог
$blog->addObserver($subscriber1);
$blog->addObserver($subscriber2);

// Публикуем первую статью
$blog->publishArticle("Шаблоны проектирования: Observer");

// Добавляем ещё одного подписчика
$blog->addObserver($subscriber3);

// Публикуем вторую статью
$blog->publishArticle("Как стать хорошим программистом");

// Отписываем одного подписчика
$blog->removeObserver($subscriber2);

// Публикуем третью статью
$blog->publishArticle("PHP для начинающих");
