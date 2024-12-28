<?php

namespace Порождающие\builder\pizza\builder;
use Pizza;
use PizzaBuilder;

require_once 'PizzaBuilder.php';
require_once __DIR__ . '/../models/Pizza.php';

// Конкретный строитель
class ConcretePizzaBuilder implements PizzaBuilder
{
    private $pizza;

    public function __construct()
    {
        $this->pizza = new Pizza();
    }

    public function setDough($dough)
    {
        $this->pizza->setDough($dough);
        return $this;
    }

    public function setSize($size)
    {
        $this->pizza->setSize($size);
        return $this;
    }

    public function setSauce($sauce)
    {
        $this->pizza->setSauce($sauce);
        return $this;
    }

    public function addTopping($topping)
    {
        $this->pizza->addTopping($topping);
        return $this;
    }

    public function addSpecialRequest($request)
    {
        $this->pizza->addSpecialRequest($request);
        return $this;
    }

    public function build()
    {
        return $this->pizza;
    }
}
