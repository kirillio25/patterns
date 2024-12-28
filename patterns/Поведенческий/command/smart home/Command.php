<?php

namespace Поведенческий\command\smart home;

interface Command
{
    public function execute(): void;

    public function undo(): void;
}
