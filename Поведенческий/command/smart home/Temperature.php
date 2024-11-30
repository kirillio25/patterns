<?php

class Temperature
{
    private int $level = 20;

    public function increase(): void
    {
        $this->level += 1;
        echo "Температура увеличена до {$this->level}°C.\n";
    }

    public function decrease(): void
    {
        $this->level -= 1;
        echo "Температура уменьшена до {$this->level}°C.\n";
    }
}
