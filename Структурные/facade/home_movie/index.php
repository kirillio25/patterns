<?php

require_once 'HomeTheaterFacade.php';

$tv = new TV();
$soundSystem = new SoundSystem();
$mediaPlayer = new MediaPlayer();
$lights = new Lights();

$homeTheater = new HomeTheaterFacade($tv, $soundSystem, $mediaPlayer, $lights);

echo "=== Включаем кинотеатр ===\n";
$homeTheater->watchMovie();

echo "\n=== Выключаем кинотеатр ===\n";
$homeTheater->endMovie();
