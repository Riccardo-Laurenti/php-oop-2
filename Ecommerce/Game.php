
<?php
class Game extends Products
{
    public $featurs;
    public $dimension;

    public function __construct($_image, $_name, $_type, $_price, $featurs, $dimension)
    {

        parent::__construct($_image, $_name, $_type, $_price);

        $this->featurs = $featurs;
        $this->dimension = $dimension;
    }
}
