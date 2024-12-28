<?php

namespace Поведенческий\command\smart home;

class Music
{
    public function play(): void
    {
        echo "Музыка включена.\n";
    }

    public function stop(): void
    {
        echo "Музыка выключена.\n";
    }
}
