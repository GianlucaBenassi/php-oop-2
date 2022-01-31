<?php

include_once __DIR__ . "./classes/Products.php";

$test = new Products("prodotto1", "questo è un bel prodotto", 150.99, "venditore1", 20,10);

var_dump($test);

echo $test->getShipmentPrice();

?>