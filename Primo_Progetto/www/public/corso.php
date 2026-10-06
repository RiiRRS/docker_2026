<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riepilogo del corso di lingua</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">
</head>
<body>
<main class="container">
    <p>
        Gentile <?php echo $_POST["cognome"]; ?> <?php echo $_POST["nome"]; ?><br>
        Lei ha richiesto l'iscrizione al corso <?php echo $_POST["corsolingua"]; ?> livello
        <?php
        if (isset($_POST["base"])) {
            echo "base";
        }
        if (isset($_POST["medio"])) {
            echo "intermedio";
        }
        if (isset($_POST["alto"])) {
            echo "avanzato";
        }
        ?>
        con orari:
    </p>

    <p>
        <?php
        if (isset($_POST["orariom"])) {
            echo "mattino<br>";
        }
        if (isset($_POST["orariop"])) {
            echo "pomeriggio<br>";
        }
        if (isset($_POST["orarios"])) {
            echo "sera<br>";
        }
        ?>
    </p>

    <p>
        Altre richieste:<br>
        <?php
        if ($_POST["altreRichieste"] == "") {
            echo "nessuna";
        } else {
            echo $_POST["altreRichieste"];
        }
        ?>
    </p>

    <p>Stiamo verificando tutti i dati, le invieremo la risposta a <?php echo $_POST["email"]; ?></p>
</main>
</body>
</html>