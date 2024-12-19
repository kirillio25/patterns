<?php

require_once 'Visitor.php';

class PerimeterVisitor implements Visitor
{
    public function visitSquare(Square $square): void
    {
        $perimeter = 4 * $square->side;
        echo "Периметр квадрата: $perimeter\n";
    }

    public function visitCircle(Circle $circle): void
    {
        $perimeter = 2 * pi() * $circle->radius;
        echo "Периметр круга: $perimeter\n";
    }

    public function visitTriangle(Triangle $triangle): void
    {
        $perimeter = $triangle->base + $triangle->sideA + $triangle->sideB;
        echo "Периметр треугольника: $perimeter\n";
    }
}
