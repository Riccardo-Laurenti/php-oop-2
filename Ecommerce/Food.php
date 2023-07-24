<?php
class Food extends Products
{
    public $weight;
    public $ingredients;

    public function __construct($_image, $_name, $_type, $_price, $weight, $ingredients)
    {
        parent::__construct($_image, $_name, $_type, $_price);

        $this->weight = $weight;
        $this->ingredients = $ingredients;
    }
}
