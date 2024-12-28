<?php

namespace Порождающие\factory use PlayerInterface;

method\player\src\Player;
require_once __DIR__ . '/PlayerInterface.php';

class MobilePlayer implements PlayerInterface
{
    public function play(string $song): void
    {
        echo "Playing mobile song: {$song}";
    }
}