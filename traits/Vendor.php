<?php

trait Vendor {
    protected $vendorName;
    protected $vendorAddress;
    protected $vendorEmail;
    protected $vendorVote;

    function getVendorName() {
        return $this->vendorName;
    }

    function getVendorAddress() {
        return $this->vendorAddress;
    }

    function getVendorEmail() {
        return $this->vendorEmail;
    }

    function getVendorVote() {
        return $this->vendorVote;
    }
}

?>