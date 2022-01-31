<?php

class User {

    protected $name;
    protected $surname;
    protected $email;
    protected $address;
    protected $userType = "standard";
    protected $creditCards = [];

    function __construct($_name, $_surname, $_email, $_address) {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
        $this->address = $_address;
    }

    function getName() {
        return $this->name;
    }

    function getSurname() {
        return $this->surname;
    }

    function getEmail() {
        return $this->email;
    }

    function getAddress() {
        return $this->address;
    }

    function getUserType() {
        return $this->userType;
    }

    function getDiscount() {
        return 0;
    }

    function addCreditCard($_card) {
        $this->creditCards[] = $_card;
    }

    function getCreditCards() {
        return $this->creditCards;
    }

}

?>