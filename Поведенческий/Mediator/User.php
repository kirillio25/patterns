<?php

require_once 'Mediator.php';

class User
{
    private string $name;
    private Mediator $mediator;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function setMediator(Mediator $mediator): void
    {
        $this->mediator = $mediator;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function sendMessage(string $message): void
    {
        echo "{$this->name} отправляет сообщение: $message\n";
        $this->mediator->sendMessage($message, $this);
    }

    public function receiveMessage(string $message, string $senderName): void
    {
        echo "{$this->name} получил сообщение от {$senderName}: $message\n";
    }
}
