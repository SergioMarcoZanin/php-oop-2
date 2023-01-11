<?php
class Food extends Products{
    public $name;
    public $price;
    public $ingredients;

    public function __construct($name, $price, $ingredients)
    {
        $this->name = $name;
        $this->price = $price;
        $this->ingredients = $ingredients;
    }

}


?>