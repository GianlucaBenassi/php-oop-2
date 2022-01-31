<?php

include_once __DIR__ . "/classes/Product.php";
include_once __DIR__ . "/classes/User.php";
include_once __DIR__ . "/classes/Premium.php";
include_once __DIR__ . "/classes/CreditCard.php";

$products = [
    new Product("Iphone 13","Lorem ipsum dolor sit amet consectetur adipisicing elit.",900,3,"Apple","Indirizzo 1","vendor1@email.com","5/5"),
    new Product("Samsung s21","Lorem ipsum dolor sit amet consectetur adipisicing elit.",850,2,"Samsung","Indirizzo 2","vendor2@email.com","3/5"),
    new Product("Xiaomi MI12 Ultra","Lorem ipsum dolor sit amet consectetur adipisicing elit.",700,5,"Xiaomi","Indirizzo 3","vendor3@email.com","4/5"),
];

$U1C1 = new CreditCard(8493659812034743,"2022-02-20", 123);
$U1C2 = new CreditCard(8452785432785738,"2026-10-04", 123);
$U2C1 = new CreditCard(4528723849713248,"2030-05-11", 123);

$users = [
    new User("Erika", "Mazza", "user1@email.com", "indirizzo 1"),
    new User("Giacomo", "Benassi", "user2@email.com", "indirizzo 2")
];

$users[0]->addCreditCard($U1C1);
$users[0]->addCreditCard($U1C2);
$users[1]->addCreditCard($U2C1);

$premiums = [
    new Premium("Gianluca", "Benassi", "premium1@email.com","Address 3")
];

$P1C1 = new CreditCard(7548527349753288,"2025-05-30", 123);

$premiums[0]->addCreditCard($P1C1);

var_dump($premiums);

?>