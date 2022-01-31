<?php

include_once __DIR__ . "./classes/Product.php";
include_once __DIR__ . "./classes/User.php";

$test = new Product("prodotto1", "questo è un bel prodotto", 150.99, "venditore1", 20,10);

var_dump($test);

echo $test->getShipmentPrice();

?>