<?php

class Products {
    protected $name;
    protected $desc;
    protected $price;
    protected $vendor;
    protected $shipmentDay;
    protected $shipmentPrice;

    function __construct($_name, $_desc, $_price, $_vendor, $_shipmentDay, $_shipmentPrice) {
        $this->name = $_name;
        $this->desc = $_desc;
        $this->price = $_price;
        $this->vendor = $_vendor;
        $this->shipmentDay = $_shipmentDay;
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

    function getVendor() {
        return $this->vendor;
    }
    
    function getShipmentDay() {
        return $this->ShipmentDay;
    }

    function getShipmentPrice() {
        return number_format($this->price * 10 / 100, 2);
    }


}

?>