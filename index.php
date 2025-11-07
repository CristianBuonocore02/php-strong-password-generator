<?php
require_once 'function.php';

if ($password != "") {
    header("location: ./password.php");
    session_start();

    $_SESSION['password'] = $password;
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

</body>

</html>