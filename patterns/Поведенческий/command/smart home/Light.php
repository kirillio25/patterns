<?php

namespace Поведенческий\command\smart home;

class Light
{
    public function on(): void
    {
        echo "Свет включен.\n";
    }

    public function off(): void
    {
        echo "Свет выключен.\n";
    }
}
