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

$U1C1 = new CreditCard("8493659812034743","2022-02-20", 123);
$U1C2 = new CreditCard("8452785432785738","2026-10-04", 123);
$U2C1 = new CreditCard("4528723849713248","2030-05-11", 123);

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

$P1C1 = new CreditCard("7548527349753288","2025-05-30", 123);

$premiums[0]->addCreditCard($P1C1);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="products">
        <h2>Products list:</h2>

        <?php foreach($products as $product) { ?>
            <h3><?php echo $product->getName() ?></h3>
            <p><?php echo $product->getDesc() ?></p>
            <p>Price: <?php echo $product->getPrice() ?>&euro;</p>
            <p>Shipment day: <?php echo $product->getShipmentDay() ?></p>
            <p>Vendor: <?php echo $product->getVendorName() ?></p>
            <p>Vendor address: <?php echo $product->getVendorAddress() ?></p>
            <p>Vendor email: <?php echo $product->getVendorEmail() ?></p>
            <p>Vendor vote: <?php echo $product->getVendorVote() ?></p>
        <?php } ?>
    </div>

    <div class="users">
        <h2>Users list:</h2>

        <?php foreach($users as $user) { ?>
            <h3>Name: <?php echo "{$user->getName()} {$user->getSurname()}" ?></h3>
            <p>Email: <?php echo $user->getEmail() ?></p>
            <p>Address: <?php echo $user->getAddress() ?></p>
            <h4>Credit cards list:</h4>
            <ul>
                <?php foreach($user->getCreditCards() as $card) { ?>
                    <li>
                        <p>Number: <?php echo $card->getCardNumber() ?></p>
                        <p>Expiry: <?php echo $card->getExpiry() ?></p>
                    </li>
                <?php } ?>
            </ul>
        <?php } ?>
    </div>

    <div class="premiums">
        <h2>Premium users list:</h2>

        <?php foreach($premiums as $premium) { ?>
            <h3>Name: <?php echo "{$premium->getName()} {$premium->getSurname()}" ?></h3>
            <p>Email: <?php echo $premium->getEmail() ?></p>
            <p>Address: <?php echo $premium->getAddress() ?></p>
            <h4>Credit cards list:</h4>
            <ul>
                <?php foreach($premium->getCreditCards() as $card) { ?>
                    <li>
                        <p>Number: <?php echo $card->getCardNumber() ?></p>
                        <p>Expiry: <?php echo $card->getExpiry() ?></p>
                    </li>
                <?php } ?>
            </ul>
        <?php } ?>
    </div>

</body>
</html>