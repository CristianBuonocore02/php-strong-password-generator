<?php
session_start();
$password = $_SESSION['password'] ?? '';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generata</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body class="bg-light d-flex justify-content-center align-items-center vh-100">
    <div class="card shadow-lg rounded-4 p-4 text-center" style="max-width: 400px; width: 100%;">
        <h1 class="mb-4">La tua password</h1>
        <p class="fs-5 fw-bold text-break"><?php echo $password; ?></p>
        <hr>
        <a href="index.php" class="btn btn-primary w-100 rounded-3 mt-3">Genera un'altra password</a>
    </div>
</body>

</html>