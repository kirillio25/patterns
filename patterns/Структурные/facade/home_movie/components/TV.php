<?php


namespace Структурные\facade\home_movie\components;
class TV
{
    public function turnOn()
    {
        echo "Телевизор включён.\n";
    }

    public function turnOff()
    {
        echo "Телевизор выключен.\n";
    }

    public function setInputChannel()
    {
        echo "Канал телевизора переключён на HDMI.\n";
    }
}
