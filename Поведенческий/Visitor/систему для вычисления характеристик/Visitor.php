<?php

interface Visitor
{
    public function visitSquare(Square $square): void;
    public function visitCircle(Circle $circle): void;
    public function visitTriangle(Triangle $triangle): void;
}
