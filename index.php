<?php include_once "php/products.php" ?>
<?php include_once "php/foodProducts.php" ?>
<?php include_once "php/toyProducts.php" ?>
<?php include_once "php/customer.php" ?>
<?php include_once "php/registeredCustomer.php" ?>
<?php include_once "php/creditCard.php" ?>

<!-- Oggi pomeriggio provate ad immaginare quali sono le classi 
necessarie per creare uno shop online con le seguenti caratteristiche.
L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.
L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi 
e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.
Dividete bene in classi e implementate gli attributi e i metodi necessari per 
il corretto funzionamento dell'e-commerce. Il focus è sulla parte di slide condivisa oggi su Drive.
BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili 
solo in un periodo particolare (es. da maggio ad agosto). (modificato)  -->

<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP2</title>
</head>

<body>
    <?php

    // food product
    $food = new Foods("Delizioso Patè", "Patè solo agnello", "Oasy", "Food", 10, "Dry", "10/11/2025");
    echo "<pre>";
    var_dump($food);
    echo "</pre>";

    // toy product
    $toy = new Toys("Delizioso Patè", "Patè solo agnello", "Oasy", "Food", 10, "Leather", "Red");
    echo "<pre>";
    var_dump($toy);
    echo "</pre>";

    // customer
    $user = new Customer("Ciro", "Cusati", 25, 3484954124, "Via Vittorio Emanuele");
    echo "<pre>";
    var_dump($user);
    echo "</pre>";

    // registered
    $registeredUser = new Registered("Ciro", "Cusati", 25, 3484954124, "Via Vittorio Emanuele", 1, "ciro@gmail.com", "Ciro184nfancka", false);
    echo "<pre>";
    var_dump($registeredUser);
    echo "</pre>";

    // credit card
    $creditCard = new CreditCard(5412487766952354, "Ciro", "Cusati", 10, 2025, 684);
    echo "<pre>";
    var_dump($creditCard);
    echo "</pre>";

    ?>
</body>

</html>