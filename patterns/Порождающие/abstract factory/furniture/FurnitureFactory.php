<?php

namespace Порождающие\abstract use Chair;
use Sofa;
use Table;

factory\furniture;

interface FurnitureFactory
{
    public function createChair(): Chair;

    public function createTable(): Table;

    public function createSofa(): Sofa;
}
