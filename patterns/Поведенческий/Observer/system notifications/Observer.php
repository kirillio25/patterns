<?php

// Интерфейс наблюдателя
namespace Поведенческий\Observer\system notifications;

interface Observer
{
    public function update(string $article): void;
}

// Подписчик
class Subscriber implements \Observer
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function update(string $article): void
    {
        echo "{$this->name} получил уведомление о новой статье: {$article}\n";
    }
}
