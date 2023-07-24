<?php
class Objects extends Products
{
    public $materials;
    public $dimension;

    public function __construct($_image, $_name, $_type, $_price, $materials, $dimension)
    {
        parent::__construct($_image, $_name, $_type, $_price);

        $this->materials = $materials;
        $this->dimension = $dimension;
    }
}
