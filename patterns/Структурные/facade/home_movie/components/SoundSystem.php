<?php


namespace Структурные\facade\home_movie\components;
class SoundSystem
{
    public function turnOn()
    {
        echo "Аудиосистема включена.\n";
    }

    public function turnOff()
    {
        echo "Аудиосистема выключена.\n";
    }

    public function setVolume($level)
    {
        echo "Громкость установлена на уровень $level.\n";
    }
}
