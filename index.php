<?php include "php/class.php" ?>
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
    $ecommerce = new Ecommerce("Zalando", "Via Primo Levi", "0817623350", "Napoli", "Animali");
    echo "<pre>";
    var_dump($ecommerce);
    echo "</pre>";

    $result = new Products("ciao", "Zalando", "Via Primo Levi", "0817623350", "Napoli", "Animali");

    echo "<pre>";
    var_dump($result);
    echo "</pre>";

    ?>
</body>

</html>