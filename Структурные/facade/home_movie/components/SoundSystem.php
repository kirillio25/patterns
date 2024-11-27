<?php


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
