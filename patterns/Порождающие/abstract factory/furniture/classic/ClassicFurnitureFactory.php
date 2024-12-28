<?php

namespace Порождающие\abstract use Chair;
use ClassicChair;
use ClassicSofa;
use ClassicTable;
use FurnitureFactory;
use Sofa;
use Table;

factory\furniture\classic;

class ClassicFurnitureFactory implements FurnitureFactory
{
    public function createChair(): Chair
    {
        return new ClassicChair();
    }

    public function createTable(): Table
    {
        return new ClassicTable();
    }

    public function createSofa(): Sofa
    {
        return new ClassicSofa();
    }
}
