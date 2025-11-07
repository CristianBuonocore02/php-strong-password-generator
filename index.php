<?php
session_start();
require_once 'function.php';

// Se la password è stata generata, la salvo in sessione e faccio redirect
if (!empty($password)) {
    $_SESSION['password'] = $password;
    header("Location: password.php");
    exit;
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
        <!-- Corretto name da 'lenght' a 'length' -->
        <input type="number" name="length" placeholder="inserisci un numero" min="5" max="40"><br><br>
        <!-- Checkbox dentro il form -->
        <input type="checkbox" name="lettere" id="lettere"><label for="lettere">Lettere</label>
        <input type="checkbox" name="numeri" id="numeri"><label for="numeri">Numeri</label>
        <input type="checkbox" name="simboli" id="simboli"><label for="simboli">Simboli</label><br><br>
        <input type="submit" value="Genera">
    </form>
</body>

</html>