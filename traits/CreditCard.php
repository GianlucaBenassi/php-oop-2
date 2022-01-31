<?php

trait CreditCard {
    protected $cardNumber;
    protected $expiry;
    protected $cvv;

    function getCardNumber() {
        return $this->cardNumber;
    }

    function getExpiry() {
        $today = date("Y-m-d");

        $today_time = strtotime($today);
        $expire_time = strtotime($this->expiry);

        if ($expire_time < $today_time) {
            throw new Exception("Credit card expired");
        } else {
            return $this->expiry;
        }
    }

    function getCvv() {
        return $this->cvv;
    }
}

?>