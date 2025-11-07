<?php
session_start();
require_once 'function.php';

// Se la password è stata generata, la salvo in sessione e faccio redirect
if (!empty($password)) {
    $_SESSION['password'] = $password;
    header("Location: password.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <title>Generatore Password</title>
</head>

<body class="bg-light d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-lg rounded-4 p-4" style="max-width: 400px; width: 100%;">
        <h1 class="text-center mb-4">Generatore Password</h1>
        <form action="" method="GET">
            <div class="mb-3">
                <input type="number" name="length" placeholder="Inserisci un numero" min="5" max="35" class="form-control rounded-3">
            </div>
            <div class="mb-3 d-flex justify-content-between">
                <div class="form-check">
                    <input type="checkbox" name="lettere" id="lettere" class="form-check-input">
                    <label for="lettere" class="form-check-label">Lettere</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="numeri" id="numeri" class="form-check-input">
                    <label for="numeri" class="form-check-label">Numeri</label>
                </div>
                <div class="form-check">
                    <input type="checkbox" name="simboli" id="simboli" class="form-check-input">
                    <label for="simboli" class="form-check-label">Simboli</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary w-100 rounded-3">Genera</button>
        </form>
    </div>
</body>

</html>