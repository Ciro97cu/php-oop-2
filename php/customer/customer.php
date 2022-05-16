<?php 
class Customer
{
    public $idCustomer;
    public $customerName;
    public $customerSurname;
    public $customerAge;
    public $registered;
    public $customerDiscount = 0;

    function __construct($idCustomer, $customerName, $customerSurname, $customerAge, $registered)
    {
        $this->idCustomer = $idCustomer;
        $this->customerName = $customerName;
        $this->customerSurname = $customerSurname;
        $this->customerAge = $customerAge;
        $this->registered = $registered;
    }

    public function setDiscount($registered)
    {
        if ($registered === true) {
            $this->customerDiscount = 20;
            echo $this->customerDiscount;
        }
    }
}
