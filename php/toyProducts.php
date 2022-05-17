<?php

class Toys extends Products
{
    private $material;
    private $color;

    public function __construct($name, $description, $brand, $type, $price, $material, $color)
    {
        parent::__construct($name, $description, $brand, $type, $price);
        $this->material = $material;
        $this->color = $color;
    }

    public function getMaterial()
    {
        return $this->material;
    }
    public function getColor()
    {
        return $this->color;
    }
}
