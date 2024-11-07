<?php

interface FurnitureFactory {
    public function createChair(): Chair;
    public function createTable(): Table;
    public function createSofa(): Sofa;
}
