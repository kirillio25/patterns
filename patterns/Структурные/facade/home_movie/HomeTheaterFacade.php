<?php

namespace Структурные\facade\home_movie;
use Lights;
use MediaPlayer;
use SoundSystem;
use TV;

require_once 'components/TV.php';
require_once 'components/SoundSystem.php';
require_once 'components/MediaPlayer.php';
require_once 'components/Lights.php';

class HomeTheaterFacade
{
    private TV $tv;
    private SoundSystem $soundSystem;
    private MediaPlayer $mediaPlayer;
    private Lights $lights;

    public function __construct(TV $tv, SoundSystem $soundSystem, MediaPlayer $mediaPlayer, Lights $lights)
    {
        $this->tv = $tv;
        $this->soundSystem = $soundSystem;
        $this->mediaPlayer = $mediaPlayer;
        $this->lights = $lights;
    }

    public function watchMovie()
    {
        echo "Подготовка к просмотру фильма...\n";
        $this->lights->dim();
        $this->tv->turnOn();
        $this->tv->setInputChannel();
        $this->soundSystem->turnOn();
        $this->soundSystem->setVolume(10);
        $this->mediaPlayer->turnOn();
        $this->mediaPlayer->play();
    }

    public function endMovie()
    {
        echo "Завершение просмотра фильма...\n";
        $this->mediaPlayer->turnOff();
        $this->soundSystem->turnOff();
        $this->tv->turnOff();
        $this->lights->brighten();
    }
}
