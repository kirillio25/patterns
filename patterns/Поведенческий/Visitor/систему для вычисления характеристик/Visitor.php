<?php

namespace Поведенческий\Visitor\систему use Circle;
use Square;
use Triangle;

для вычисления характеристик;
interface Visitor
{
    public function visitSquare(Square $square): void;

    public function visitCircle(Circle $circle): void;

    public function visitTriangle(Triangle $triangle): void;
}
