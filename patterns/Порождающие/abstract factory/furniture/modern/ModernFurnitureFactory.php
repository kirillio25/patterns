<?php

namespace Порождающие\abstract use Chair;
use FurnitureFactory;
use ModernChair;
use ModernSofa;
use ModernTable;
use Sofa;
use Table;

factory\furniture\modern;

class ModernFurnitureFactory implements FurnitureFactory
{
    public function createChair(): Chair
    {
        return new ModernChair();
    }

    public function createTable(): Table
    {
        return new ModernTable();
    }

    public function createSofa(): Sofa
    {
        return new ModernSofa();
    }
}
