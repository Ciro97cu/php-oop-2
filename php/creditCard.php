<?php
class CreditCard
{
    private $ccNumber;
    private $ccName;
    private $ccSurname;
    private $ccExpiryMonth;
    private $ccExpiryYear;
    private $ccCvv;

    public function __construct($ccNumber, $ccName, $ccSurname, $ccExpiryMonth, $ccExpiryYear, $ccCvv)
    {
        $this->ccNumber = $ccNumber;
        $this->ccName = $ccName;
        $this->ccSurname = $ccSurname;
        $this->ccExpiryMonth = $ccExpiryMonth;
        $this->ccExpiryYear = $ccExpiryYear;
        $this->ccCvv = $ccCvv;
    }

    public function getCcNumber()
    {
        return $this->ccNumber;
    }
    public function getCcName()
    {
        return $this->ccName;
    }
    public function getCcSurname()
    {
        return $this->ccSurname;
    }
    public function getCcExpiryMonth()
    {
        return $this->ccExpiryMonth;
    }
    public function getExpiryYear()
    {
        return $this->ccExpiryYear;
    }
    public function getCcCvv()
    {
        return $this->ccCvv;
    }
}
