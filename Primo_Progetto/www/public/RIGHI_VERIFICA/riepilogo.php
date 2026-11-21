<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <title>Riepilogo Prenotazione</title>
</head>
<body>

<h1>Riepilogo prenotazione</h1>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!isset($_POST['nome']) || empty($_POST['nome']) || !isset($_POST['giorni']) || empty($_POST['giorni'])) {
        echo "<p style='color:red;'>Attenzione: compilare tutti i campi obbligatori (Nome e Numero di giorni).</p>";
    } else {
        $nome = $_POST['nome'];
        $tipo = $_POST['tipo'];
        $giorni = $_POST['giorni'];

        $costo_giornaliero = 0;
        if ($tipo == "Mountain Bike") {
            $costo_giornaliero = 12;
        } elseif ($tipo == "Bicicletta Elettrica") {
            $costo_giornaliero = 20;
        }

        $costo_totale = $costo_giornaliero * $giorni;

        if (isset($_POST['consegna'])) {
            $supplemento = 5;
            $costo_totale += $supplemento;
        } else {
            $supplemento = 0;
        }
        ?>

        <table border="1">
            <tr>
                <th>Nome del cliente</th>
                <td><?php echo $nome; ?></td>
            </tr>
            <tr>
                <th>Tipologia di bicicletta</th>
                <td><?php echo $tipo; ?></td>
            </tr>
            <tr>
                <th>Numero di giorni</th>
                <td><?php echo $giorni; ?></td>
            </tr>
            <tr>
                <th>Costo giornaliero</th>
                <td><?php echo $costo_giornaliero; ?>,00 euro</td>
            </tr>
            <tr>
                <th>Supplemento consegna</th>
                <td><?php echo $supplemento; ?>,00 euro</td>
            </tr>
            <tr>
                <th>Costo totale</th>
                <td><strong><?php echo $costo_totale; ?>,00 euro</strong></td>
            </tr>
        </table>

        <p style="color:green;">La prenotazione della bicicletta è stata effettuata con successo!</p>
        <?php
    }
}
?>

<br>
<a href="home.php">Torna alla home</a>

</body>
</html>