<?php

namespace Структурные\facade\home_movie\components;
class MediaPlayer
{
    public function turnOn()
    {
        echo "Медиаплеер включён.\n";
    }

    public function turnOff()
    {
        echo "Медиаплеер выключен.\n";
    }

    public function play()
    {
        echo "Воспроизведение фильма началось.\n";
    }
}
