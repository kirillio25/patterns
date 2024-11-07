<?php
require_once __DIR__ . '/../builder/PizzaBuilder.php';

// Директор, управляющий процессом создания различных типов пицц
class PizzaDirector {
    private $builder;

    public function __construct(PizzaBuilder $builder) {
        $this->builder = $builder;
    }

    public function makeMargherita() {
        return $this->builder
            ->setDough("thin")
            ->setSize("medium")
            ->setSauce("tomato")
            ->addTopping("cheese")
            ->build();
    }

    public function makePepperoni() {
        return $this->builder
            ->setDough("traditional")
            ->setSize("large")
            ->setSauce("tomato")
            ->addTopping("cheese")
            ->addTopping("pepperoni")
            ->build();
    }
}
