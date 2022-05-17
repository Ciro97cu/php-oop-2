<?php
class Products
{
    protected $name;
    protected $description;
    protected $brand;
    protected $type;
    protected $price;

    public function __construct($name, $description, $brand, $type, $price)
    {
        $this->name = $name;
        $this->description = $description;
        $this->brand = $brand;
        $this->type = $type;
        $this->price = $price;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getDescription()
    {
        return $this->description;
    }
    public function getBrand()
    {
        return $this->brand;
    }
    public function getType()
    {
        return $this->type;
    }
    public function getPrice()
    {
        return $this->price;
    }
}
