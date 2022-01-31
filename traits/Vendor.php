<?php

trait Vendor {
    protected $vendorName;
    protected $vendorAddress;
    protected $vendorEmail;
    protected $vendorVote;

    function getVendorName() {
        return $this->name;
    }

    function getVendorAddress() {
        return $this->address;
    }

    function getVendorEmail() {
        return $this->email;
    }

    function getVendorVote() {
        return $this->vote;
    }
}

?>