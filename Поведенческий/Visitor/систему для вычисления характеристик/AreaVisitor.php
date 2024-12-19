<?php

require_once 'Visitor.php';

class AreaVisitor implements Visitor
{
    public function visitSquare(Square $square): void
    {
        $area = $square->side * $square->side;
        echo "Площадь квадрата: $area\n";
    }

    public function visitCircle(Circle $circle): void
    {
        $area = pi() * $circle->radius * $circle->radius;
        echo "Площадь круга: $area\n";
    }

    public function visitTriangle(Triangle $triangle): void
    {
        $area = 0.5 * $triangle->base * $triangle->height;
        echo "Площадь треугольника: $area\n";
    }
}
