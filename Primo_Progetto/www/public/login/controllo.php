<?php
session_start();

function correggi_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
$username = trim($_POST['username'] ?? '');
$password = $_POST['password'] ?? '';
$errori = [];

if (strlen($password) < 8) {
    $errori[] = 'La password deve avere almeno 8 caratteri';
}

if (!preg_match('/[A-Z]/', $password)) {
    $errori[] = 'La password deve contenere almeno una lettera maiuscola';
}

if (!preg_match('/[0-9]/', $password)) {
    $errori[] = 'La password deve contenere almeno una cifra';
}

if(empty($errori)){
    header('location: area-riservata.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>hello-world</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.blue.min.css">
</head>
<body>
<main class="container" style="max-width: 500px">
    <article>
        <header>
             <h1 style="text-align: center">Errori:</h1>
        </header>

        <ul>
            <?php foreach ($errori as $errore): ?>
                <li><?= htmlspecialchars($errore) ?></li>
            <?php endforeach; ?>
        </ul>
        <a href="login.php" role="button" class="secondary">Indietro</a>

    </article>
</main>
</body>
</html>
