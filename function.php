<?php
$password = "";


if (isset($_GET['length'])) {
    $length = (int) $_GET['length'];

    $lettere = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $numeri = '0123456789';
    $simboli = '!@#$%^&*()\'';
    $allcharacters = '';

    // Controllo checkbox
    if (isset($_GET['numeri']) && $_GET['numeri'] === "on") {
        $allcharacters .= $numeri;
    }
    if (isset($_GET['lettere']) && $_GET['lettere'] === "on") {
        $allcharacters .= $lettere;
    }
    if (isset($_GET['simboli']) && $_GET['simboli'] === "on") {
        $allcharacters .= $simboli;
    }

    // Generazione password solo se è stato selezionato almeno un tipo di carattere
    if (empty($allcharacters)) {
        $password = "Seleziona almeno un tipo di carattere!"; // Messaggio se niente selezionato
    } else {
        for ($i = 0; $i < $length; $i++) {
            $randomPosition = rand(0, strlen($allcharacters) - 1);
            $password .= $allcharacters[$randomPosition];
        }
    }
}
