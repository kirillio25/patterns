<?php

class VictorianFurnitureFactory implements FurnitureFactory {
    public function createChair(): Chair {
        return new VictorianChair();
    }

    public function createTable(): Table {
        return new VictorianTable();
    }

    public function createSofa(): Sofa {
        return new VictorianSofa();
    }
}
