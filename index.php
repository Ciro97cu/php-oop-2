<?php include_once "php/class.php" ?>
<?php include_once "php/product/products.php" ?>
<?php include_once "php/customer/customer.php" ?>
<?php include_once "php/payment/creditCard.php" ?>
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
    $ecommerce = new Ecommerce("Boolpet", "0817623350", "Animali");
    echo "<pre>";
    var_dump($ecommerce);
    echo "</pre>";

    $product = new Products("Boolpet", "0817623350", "Animali");
    $product->setProducts("Food", "Scatoletta di carne con verdure", 1.50);

    echo "<pre>";
    var_dump($product);
    echo "</pre>";

    $user = new Customer(1, "Ciro", "Cusati", 25);
    $user->setDiscount(true);

    echo "<pre>";
    var_dump($user);
    echo "</pre>";

    $creditCard = new CreditCard(1, "Ciro", "Cusati", 25, true);
    $creditCard->setCreditInfo(5326987744514862, "Ciro", "Cusati", 10, 2025, 745);

    echo "<pre>";
    var_dump($creditCard);
    echo "</pre>";
    ?>
</body>

</html>