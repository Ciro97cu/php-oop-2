<?php
class Registered extends Customer
{
    private $idCustomer;
    private $email;
    private $password;
    private $registered;
    private $customerDiscount;

    public function __construct($name, $surname, $age, $phone, $address, $idCustomer, $email, $password, $registered)
    {
        parent::__construct($name, $surname, $age, $phone, $address);
        $this->idCustomer = $idCustomer;
        $this->email = $email;
        $this->password = $password;
        $this->setDiscount($registered);
    }

    public function setDiscount($registered)
    {
        if ($registered == true) {
            $this->customerDiscount = "20%";
            $this->registered = $registered;
        } else {
            $this->customerDiscount = "0%";
            $this->registered = $registered;
        }
    }

    public function getIdCustomer()
    {
        return $this->idCustomer;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPassword()
    {
        return $this->password;
    }
    public function getCustomerDiscount()
    {
        return $this->customerDiscount;
    }
}
