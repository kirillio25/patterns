<?php

namespace Структурные\facade\home_movie\components;
class Lights
{
    public function dim()
    {
        echo "Освещение приглушено.\n";
    }

    public function brighten()
    {
        echo "Освещение увеличено до нормального уровня.\n";
    }
}
