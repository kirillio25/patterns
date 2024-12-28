<?php

namespace Поведенческий\command\smart use Command;
use Light;

home;
require_once 'Command.php';

class LightCommand implements Command
{
    private Light $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute(): void
    {
        $this->light->on();
    }

    public function undo(): void
    {
        $this->light->off();
    }
}
