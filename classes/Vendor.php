<?php

class Vendor {
    protected $name;
    protected $address;
    protected $email;
    protected $vote;

    function __construct($_name, $_address, $_email, $_vote) {
        $this->name = $_name;
        $this->address = $_address;
        $this->email = $_email;
        $this->vote = $_vote;
    }

    function getName() {
        return $this->name;
    }

    function getAddress() {
        return $this->address;
    }

    function getEmail() {
        return $this->email;
    }

    function getVote() {
        return $this->vote;
    }
}

?>