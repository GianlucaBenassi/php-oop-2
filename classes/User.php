<?php

include_once __DIR__ . "/../traits/CreditCard.php";

class User {

    use CreditCard;

    protected $name;
    protected $surname;
    protected $email;
    protected $address;
    protected $creditCards;
    protected $userType = "standard";

    function __construct($_name, $_surname, $_email, $_address, $_creditCards) {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
        $this->address = $_address;
        $this->creditCards = $_creditCards;
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

    function getCreditCards() {
        return $this->creditCards;
    }

    function getUserType() {
        return $this->userType;
    }

    function getDiscount() {
        return 0;
    }
}

?>