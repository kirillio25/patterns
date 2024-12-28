<?php

// Memento: Хранит состояние редактора
namespace Поведенческий\Memento\text redactor;

class Memento
{
    private string $state;

    public function __construct(string $state)
    {
        $this->state = $state;
    }

    public function getState(): string
    {
        return $this->state;
    }
}
