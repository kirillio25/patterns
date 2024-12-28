<?php
// Класс, представляющий готовую пиццу
namespace Порождающие\builder\pizza\models;
class Pizza
{
    private $dough;
    private $size;
    private $sauce;
    private $toppings = [];
    private $specialRequests = [];

    public function setDough($dough)
    {
        $this->dough = $dough;
    }

    public function setSize($size)
    {
        $this->size = $size;
    }

    public function setSauce($sauce)
    {
        $this->sauce = $sauce;
    }

    public function addTopping($topping)
    {
        $this->toppings[] = $topping;
    }

    public function addSpecialRequest($request)
    {
        $this->specialRequests[] = $request;
    }

    public function showPizza()
    {
        echo "Pizza with {$this->dough} dough, size {$this->size}, sauce: {$this->sauce}.\n";
        echo "Toppings: " . implode(', ', $this->toppings) . ".\n";
        if (!empty($this->specialRequests)) {
            echo "Special requests: " . implode(', ', $this->specialRequests) . ".\n";
        }
    }
}
