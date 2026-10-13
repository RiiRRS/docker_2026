<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Accedi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.blue.min.css">
</head>
<body>
<main class="container" style="max-width: 500px">
    <article>
        <header>
            <<h1 style="text-align: center">Accedi alla pagina</h1>
        </header>

        <form action="controllo.php" method="post">
            <label for="username">Username</label>
            <input type="text" id="username" name="username" autocomplete="username" required>

            <label for="password">Password</label>
            <input type="password" id="password" name="password" autocomplete="current-password" required>

            <button type="submit">Accedi</button>
        </form>
    </article>
</main>
</body>
</html>