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
