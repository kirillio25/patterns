<?php

class TreeType
{
    private string $name;
    private string $color;
    private string $texture;

    public function __construct(string $name, string $color, string $texture)
    {
        $this->name = $name;
        $this->color = $color;
        $this->texture = $texture;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getColor(): string
    {
        return $this->color;
    }

    public function getTexture(): string
    {
        return $this->texture;
    }

    public function display(int $x, int $y, int $z): void
    {
        echo "Дерево: {$this->name}, Цвет: {$this->color}, Текстура: {$this->texture}, Позиция: ({$x}, {$y}, {$z})\n";
    }
}
