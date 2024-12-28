<?php

namespace Порождающие\factory use MobilePlayer;
use PlayerInterface;

method\player\src\Factories;
require_once __DIR__ . '/../Player/PlayerInterface.php';
require_once __DIR__ . '/../Player/MobilePlayer.php';

class PlayerFactory
{
    public function listing(string $device): PlayerInterface
    {
        switch ($device) {
            case 'mobile':
                return new MobilePlayer();
            // case 'ios':
            //     return new IosPlayer();
            default:
                throw new Exception('Unsupported device type');
        }

    }
}