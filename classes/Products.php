<?php

class Products {
    protected $name;
    protected $desc;
    protected $price;
    protected $shipmentDay;
    protected $vendor;

    function __construct($_name, $_desc, $_price, $_shipment, $_vendor) {
        $this->name = $_name;
        $this->desc = $_desc;
        $this->price = $_price;
        $this->shipment = $_shipment;
        $this->vendor = $_vendor;
    }
}

?>