<?php

namespace Поведенческий\Visitor\систему use Shape;
use Visitor;

для вычисления характеристик;
require_once 'Shape.php';

class Square implements Shape
{
    public float $side;

    public function __construct(float $side)
    {
        $this->side = $side;
    }

    public function accept(Visitor $visitor): void
    {
        $visitor->visitSquare($this);
    }
}
