<?php

include_once __DIR__ . "./classes/Product.php";
include_once __DIR__ . "./classes/User.php";
include_once __DIR__ . "./classes/Premium.php";

$test = new User("Gianluca","Benassi","benox1199@gmail.com","Mio indirizzo", "1234567890");
var_dump($test);

$premium = new Premium("Erika","Mazza","eri@gmail.com","Suo indirizzo di casa","943289302478");
var_dump($premium)

?>