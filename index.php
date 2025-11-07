<?php

$password = "";

if (isset($_GET['lenght'])) {
    $length = $_GET['lenght'];


    $minuscole = 'abcdefghijklmnopqrstuvwxyz';
    $maiuscole = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numeri = '0123456789';
    $simboli = '!@#$%^&*()\'';

    $allCarts = $minuscole . $maiuscole . $numeri . $simboli;

    $password = "";

    for ($i = 0; $i < $length; $i++) {
        $randomPosition = rand(0, strlen($allCarts) - 1);
        $password .= $allCarts[$randomPosition];
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generatore Password</title>
</head>

<body>
    <h1>Generatore password</h1>
    <hr>
    <br>
    <form action="" method="GET">
        <input type="number" name="lenght" placeholder="inserisci un numero" min="5" max="40">
        <input type="submit" value="Genera">
    </form>
    <br>
    <hr>
    <h1><?php echo $password; ?></h1>
</body>

</html>