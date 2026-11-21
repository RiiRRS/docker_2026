<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>noleggio bici</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
</head>
<body>

<hr>

<?php
$tipo = "";
if (isset($_GET['tipo'])) {
    $tipo = $_GET['tipo'];
} elseif (isset($_POST['tipo'])) {
    $tipo = $_POST['tipo'];
}
?>

<h1>Richiesta di noleggio</h1>
<p>Tipologia di noleggio selezionata: <?php echo $tipo; ?></</p>

<form action="riepilogo.php" method="POST">
    <input type="hidden" name="tipo" value="<?php echo $tipo; ?>">

    <label for="nome">Nome del cliente:</label><br>
    <input type="text" id="nome" name="nome"
           value="<?php if(isset($_POST['nome'])) echo $_POST['nome']; ?>"
    ><br><br>

    <label for="giorni">numero di giorni:</label><br>
    <select id="giorni" name="giorni">
        <option value="1" <?php if(isset($_POST['giorni']) && $_POST['giorni'] == "1") echo "selected"; ?>>1 giorni</option>
        <option value="2" <?php if(isset($_POST['giorni']) && $_POST['giorni'] == "2") echo "selected"; ?>>2 giorni</option>
        <option value="3" <?php if(isset($_POST['giorni']) && $_POST['giorni'] == "3") echo "selected"; ?>>3 giorni</option>
        <option value="4" <?php if(isset($_POST['giorni']) && $_POST['giorni'] == "4") echo "selected"; ?>>4 giorni</option>
        <option value="5" <?php if(isset($_POST['giorni']) && $_POST['giorni'] == "5") echo "selected"; ?>>5 giorni</option>
        <option value="6" <?php if(isset($_POST['giorni']) && $_POST['giorni'] == "6") echo "selected"; ?>>6 giorni</option>
    </select><br><br>

    <label for="domicilio">consegna a domicilio:</label>
    <input type="checkbox" id="domicilio" name="domicilio" value="1" <?php if(isset($_POST['domicilio'])) echo "checked"; ?>>
    <br><br><input type="submit" value="Calcola Costo">




    <a href="home.php">Torna alla Home</a>
</body>
</html>

