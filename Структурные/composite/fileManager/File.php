<?php

require_once 'Component.php';

class File implements Component
{
    private $name;
    private $size;

    public function __construct(string $name, int $size)
    {
        $this->name = $name;
        $this->size = $size;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getSize(): int
    {
        return $this->size;
    }

    public function countFiles(): int
    {
        return 1; // Это файл, значит всегда 1.
    }
}
