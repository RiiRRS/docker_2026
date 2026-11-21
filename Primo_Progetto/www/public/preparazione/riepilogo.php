
<?php
$tipo = "";
if (isset($_GET['tipo'])) {
    $tipo = $_GET['tipo'];
} elseif (isset($_POST['tipo'])) {
    $tipo = $_POST['tipo'];
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (!isset($_POST['nome']) || empty($_POST['nome']) || !isset($_POST['giorni']) || empty($_POST['giorni'])) {
        echo "<p style='color:red;'>Attenzione: compilare tutti i campi</p>";
    } else {
        $nome = $_POST['nome'];
        $giorni = $_POST['giorni'];

        $costo_al_giorno = 0;
        if ($tipo == "mountain") {
            $costo_al_giorno = 12;
        } else if ($tipo == "elettrica") {
            $costo_al_giorno = 20;
        }

        $costo_totale = $costo_al_giorno * $giorni;
        if (isset($_POST['domicilio'])) {
            $domicilio = 5;
            $costo_totale += $domicilio;

        } else $domicilio = 0;
    }
}
        ?>
         <h3>Riepilogo noleggio</h3>
        <table border="1">
            <tr>
                <th>Nome del cliente</th>
                <td><?php echo $nome; ?></td>
            </tr>
            <tr>
                <th>Tipologia di noleggio</th>
            <td><?php echo $tipo; ?></td>
            </tr>
            <tr>
                <th>numero di giorni</th>
                <td><?php echo $giorni; ?> giorni</td>
            </tr>
            <tr>
                <th>Costo per giorno</th>
                <td><?php echo $costo_al_giorno; ?> €</td>
            </tr>
            <tr>
                <th>costo consegna a domicilio</th>
                <td><?php echo $domicilio; ?> €</td>
            </tr>

            <tr>
                <th>Costo Totale</th>
                <td><?php echo $costo_totale; ?> €</td>
            </tr>
        </table>
    <p style="color:green;">Richiesta di spedizione effettuata correttamente!</p>
<a href="home.php">Torna alla Home</a>


