<?php

namespace Порождающие\abstract use Chair;
use FurnitureFactory;
use Sofa;
use Table;
use VictorianChair;
use VictorianSofa;
use VictorianTable;

factory\furniture\victorian;

class VictorianFurnitureFactory implements FurnitureFactory
{
    public function createChair(): Chair
    {
        return new VictorianChair();
    }

    public function createTable(): Table
    {
        return new VictorianTable();
    }

    public function createSofa(): Sofa
    {
        return new VictorianSofa();
    }
}
