<?php
class Customer
{
    public $idCustomer;
    public $customerName;
    public $customerSurname;
    public $customerAge;
    public $registered;
    public $customerDiscount;

    function __construct($idCustomer, $customerName, $customerSurname, $customerAge)
    {
        $this->idCustomer = $idCustomer;
        $this->customerName = $customerName;
        $this->customerSurname = $customerSurname;
        $this->customerAge = $customerAge;
    }

    public function setDiscount($registered)
    {
        if ($registered == true) {
            $this->customerDiscount = 20;
            echo $this->customerDiscount;
            $this->registered = $registered;
        } else {
            $this->customerDiscount = 0;
            echo $this->customerDiscount;
            $this->registered = $registered;
        }
    }
}
