<?php
class Products extends Ecommerce
{
    public $name;
    public $description;
    public $price;

    public function setProducts($name, $description, $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->price = $price;
    }
}
