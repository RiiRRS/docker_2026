<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Spedizione</title>
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

<h1>Richiesta di spedizione</h1>
<p>Tipologia di spedizione selezionata: <?php echo $tipo; ?></</p>

<form action="spedizione.php" method="POST">
    <input type="hidden" name="tipo" value="<?php echo $tipo; ?>">

    <label for="nome">Nome del cliente:</label><br>
    <input type="text" id="nome" name="nome" value="<?php if(isset($_POST['nome'])) echo $_POST['nome']; ?>"><br><br>

    <label for="peso">Peso del pacco (kg):</label><br>
    <select id="peso" name="peso">
        <option value="1" <?php if(isset($_POST['peso']) && $_POST['peso'] == "1") echo "selected"; ?>>1 kg</option>
        <option value="2" <?php if(isset($_POST['peso']) && $_POST['peso'] == "2") echo "selected"; ?>>2 kg</option>
        <option value="3" <?php if(isset($_POST['peso']) && $_POST['peso'] == "3") echo "selected"; ?>>3 kg</option>
        <option value="4" <?php if(isset($_POST['peso']) && $_POST['peso'] == "4") echo "selected"; ?>>4 kg</option>
        <option value="5" <?php if(isset($_POST['peso']) && $_POST['peso'] == "5") echo "selected"; ?>>5 kg</option>
        <option value="6" <?php if(isset($_POST['peso']) && $_POST['peso'] == "6") echo "selected"; ?>>6 kg</option>
    </select><br><br>

    <label for="aereo">Invio aereo:</label>
    <input type="checkbox" id="aereo" name="aereo" value="1" <?php if(isset($_POST['aereo'])) echo "checked"; ?>>
    <br><br><input type="submit" value="Calcola Costo">

</form>

<br>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!isset($_POST['nome']) || empty($_POST['nome']) || !isset($_POST['peso']) || empty($_POST['peso'])) {
        echo "<p style='color:red;'>Attenzione: compilare tutti i campi</p>";
    } else {
        $nome = $_POST['nome'];
        $peso = $_POST['peso'];

        $costo_al_kg = 0;
        if ($tipo == "Standard") {
            $costo_al_kg = 3;
        } elseif ($tipo == "Espressa") {
            $costo_al_kg = 5;
        }

        $costo_totale = $costo_al_kg * $peso;

        if (isset($_POST['aereo'])){
            $aereo = 10;
            $costo_totale += $aereo;

        } else $aereo = 0;
        ?>

        <h3>Riepilogo Spedizione</h3>
        <table border="1">
            <tr>
                <th>Nome del cliente</th>
                <td><?php echo $nome; ?></td>
            </tr>
            <tr>
                <th>Tipologia di spedizione</th>
                <td><?php echo $tipo; ?></td>
            </tr>
            <tr>
                <th>Peso del pacco</th>
                <td><?php echo $peso; ?> kg</td>
            </tr>
            <tr>
                <th>Costo per chilogrammo</th>
                <td><?php echo $costo_al_kg; ?> €</td>
            </tr>
            <tr>
                <th>Supplemento aereo</th>
                <td><?php echo $aereo; ?> €</td>
            </tr>
            <tr>
                <th>Costo Totale</th>
                <td><?php echo $costo_totale; ?> €</td>
            </tr>
        </table>

        <p style="color:green;">Richiesta di spedizione effettuata correttamente!</p>
        <?php
    }
}
?>
<a href="home.php">Torna alla Home</a>
</body>
</html>