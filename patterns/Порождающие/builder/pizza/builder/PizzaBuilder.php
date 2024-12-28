<?php

namespace Порождающие\builder\pizza\builder;
interface PizzaBuilder
{
    public function setDough($dough);

    public function setSize($size);

    public function setSauce($sauce);

    public function addTopping($topping);

    public function addSpecialRequest($request);

    public function build();
}