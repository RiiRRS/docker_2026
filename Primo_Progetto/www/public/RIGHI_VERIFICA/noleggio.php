<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Richiesta di Noleggio</title>
</head>
<body>

<?php
$tipo = "";
if (isset($_GET['tipo'])) {
    $tipo = $_GET['tipo'];
}
?>

<h1>Richiesta di noleggio</h1>
<p>Tipologia selezionata: <?php echo $tipo; ?></p>

<form action="riepilogo.php" method="POST">
    <input type="hidden" name="tipo" value="<?php echo $tipo; ?>">

    <label for="nome">Nome del cliente:</label>
    <input type="text" id="nome" name="nome"><br><br>

    <label for="giorni">Numero di giorni:</label>
    <select id="giorni" name="giorni">
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
    </select><br><br>

    <input type="checkbox" id="consegna" name="consegna" value="1">
    <label for="consegna">Consegna a domicilio (supplemento di 5 euro)</label><br><br>

    <input type="submit" value="Invia richiesta">
    <input type="reset" value="Reset">
</form>

<br>
<a href="home.php">Torna alla home</a>

</body>
</html>