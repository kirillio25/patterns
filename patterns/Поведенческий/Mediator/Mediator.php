<?php

namespace Поведенческий\Mediator;
use User;

interface Mediator
{
    public function sendMessage(string $message, User $sender): void;
}

class ChatRoom implements Mediator
{
    private array $users = [];

    public function addUser(User $user): void
    {
        $this->users[] = $user;
        $user->setMediator($this);
    }

    public function sendMessage(string $message, User $sender): void
    {
        foreach ($this->users as $user) {
            if ($user !== $sender) {
                $user->receiveMessage($message, $sender->getName());
            }
        }
    }
}
