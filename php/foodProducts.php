<?php
class Foods extends Products
{
    private $typology;
    private $expiryDate;

    public function __construct($name, $description, $brand, $type, $price, $typology, $expiryDate)
    {
        parent::__construct($name, $description, $brand, $type, $price);
        $this->typology = $typology;
        $this->expiryDate = $expiryDate;
    }

    public function getTypology()
    {
        return $this->typology;
    }
    public function getExpiryDate()
    {
        return $this->expiryDate;
    }
}
