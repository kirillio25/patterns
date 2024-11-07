<?php

class ClassicFurnitureFactory implements FurnitureFactory {
    public function createChair(): Chair {
        return new ClassicChair();
    }

    public function createTable(): Table {
        return new ClassicTable();
    }

    public function createSofa(): Sofa {
        return new ClassicSofa();
    }
}
