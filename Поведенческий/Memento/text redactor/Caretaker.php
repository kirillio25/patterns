<?php

require_once 'Memento.php';

// Caretaker: Управляет сохранёнными состояниями
class Caretaker
{
    private array $history = [];

    public function saveState(Memento $memento): void
    {
        $this->history[] = $memento;
    }

    public function getState(int $index): ?Memento
    {
        return $this->history[$index] ?? null;
    }

    public function getHistory(): array
    {
        return $this->history;
    }
}
