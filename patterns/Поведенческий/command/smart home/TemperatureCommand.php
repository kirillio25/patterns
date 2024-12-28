<?php

namespace Поведенческий\command\smart use Command;
use Temperature;

home;
require_once 'Command.php';

class TemperatureCommand implements Command
{
    private Temperature $temperature;

    public function __construct(Temperature $temperature)
    {
        $this->temperature = $temperature;
    }

    public function execute(): void
    {
        $this->temperature->increase();
    }


    public function undo(): void
    {
        $this->temperature->decrease();
    }
}
