<?php
class CreditCard extends Customer
{
    private $ccNumber;
    private $ccName;
    private $ccSurname;
    private $ccExpiryMonth;
    private $ccExpiryYear;
    private $ccCvv;

    public function setCreditInfo($ccNumber, $ccName, $ccSurname, $ccExpiryMonth, $ccExpiryYear, $ccCvv)
    {
        $this->ccNumber = $ccNumber;
        $this->ccName = $ccName;
        $this->ccSurname = $ccSurname;
        $this->ccExpiryMonth = $ccExpiryMonth;
        $this->ccExpiryYear = $ccExpiryYear;
        $this->ccCvv = $ccCvv;
    }
}
