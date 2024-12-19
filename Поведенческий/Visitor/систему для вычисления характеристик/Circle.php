<?php

require_once 'Shape.php';

class Circle implements Shape
{
    public float $radius;

    public function __construct(float $radius)
    {
        $this->radius = $radius;
    }

    public function accept(Visitor $visitor): void
    {
        $visitor->visitCircle($this);
    }
}
