<?php

class CreditCard {
    protected $cardNumber;
    protected $expiry;
    protected $cvv;

    function __construct($_cardNumber, $_expiry, $_cvv) {
        $this->cardNumber = $_cardNumber;
        $this->cvv = $_cvv;
        $this->setExpiry($_expiry);
    }


    function getCardNumber() {
        return $this->cardNumber;
    }

    private function setExpiry($_date) {
        $today_time = strtotime(date("Y-m-d"));
        $expire_time = strtotime(date($_date));

        if ($expire_time < $today_time) {
            throw new Exception("Credit card expired");
        } else {
            $this->expiry = $_date;
        }
    }

    function getCvv() {
        return $this->cvv;
    }
}

?>