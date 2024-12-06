<?php

require_once 'Memento.php';

// Originator: Редактор, состояние которого мы будем сохранять
class Editor
{
    private string $content = '';

    public function write(string $text): void
    {
        $this->content .= $text . "\n";
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function save(): Memento
    {
        return new Memento($this->content);
    }

    public function restore(Memento $memento): void
    {
        $this->content = $memento->getState();
    }
}
