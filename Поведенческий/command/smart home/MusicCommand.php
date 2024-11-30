<?php

require_once 'Command.php';

class MusicCommand implements Command
{
    private Music $music;

    public function __construct(Music $music)
    {
        $this->music = $music;
    }

    public function execute(): void
    {
        $this->music->play();
    }

    public function undo(): void
    {
        $this->music->stop();
    }
}
