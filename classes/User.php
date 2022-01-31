<?php

class User {
    protected $name;
    protected $surname;
    protected $email;
    protected $address;
    protected $creditCards;

    function __construct($_name, $_surname, $_email, $_address, $_creditCards) {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
        $this->address = $_address;
        $this->creditCards = $_creditCards;
    }
}

?>