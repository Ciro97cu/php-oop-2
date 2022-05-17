<?php
class Customer
{
    protected $name;
    protected $surname;
    protected $age;
    protected $phone;
    protected $address;

    public function __construct($name, $surname, $age, $phone, $address)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->age = $age;
        $this->phone = $phone;
        $this->address = $address;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getSurname()
    {
        return $this->surname;
    }
    public function getAge()
    {
        return $this->age;
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function getAddress()
    {
        return $this->address;
    }
}
