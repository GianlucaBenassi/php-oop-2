<?php

require_once __DIR__ . "/../traits/Vendor.php";
class Product {

    use Vendor;

    protected $name;
    protected $desc;
    protected $price;
    protected $shipmentDay;
    protected $shipmentPrice;

    function __construct($_name, $_desc, $_price, $_shipmentDay, $_vendorName, $_vendorAddress, $_vendorEmail, $_vendorVote) {
        $this->name = $_name;
        $this->desc = $_desc;
        $this->price = $_price;
        $this->shipmentDay = $_shipmentDay;
        $this->vendorName = $_vendorName;
        $this->vendorAddress = $_vendorAddress;
        $this->vendorEmail = $_vendorEmail;
        $this->vendorVote = $_vendorVote;
    }

    function getName() {
        return $this->name;
    }

    function getDesc() {
        return $this->desc;
    }

    function getPrice() {
        return $this->price;
    }
    
    function getShipmentDay() {
        return $this->ShipmentDay;
    }

    function getShipmentPrice($_userType) {
        if ($_userType = "premium") {
            return 0;
        } else {
            return number_format($this->price * 10 / 100, 2);
        }
    }


}

?>