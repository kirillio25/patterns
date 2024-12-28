<?php

namespace Поведенческий\command\smart use Command;

home;

class RemoteControl
{
    private array $history = [];

    public function sendCommand(Command $command): void
    {
        $command->execute();
        $this->history[] = $command;
    }

    public function undoLastCommand(): void
    {
        if (!empty($this->history)) {
            $command = array_pop($this->history);
            $command->undo();
        } else {
            echo "Нет команд для отмены.\n";
        }
    }
}
