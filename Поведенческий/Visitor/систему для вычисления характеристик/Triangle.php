<?php

require_once 'Shape.php';

class Triangle implements Shape
{
    public float $base;
    public float $height;
    public float $sideA;
    public float $sideB;

    public function __construct(float $base, float $height, float $sideA, float $sideB)
    {
        $this->base = $base;
        $this->height = $height;
        $this->sideA = $sideA;
        $this->sideB = $sideB;
    }

    public function accept(Visitor $visitor): void
    {
        $visitor->visitTriangle($this);
    }
}
