<?php
$messaggio = "";

if (isset($_POST["prenota"])) {
    $sistemazione = $_POST["sistemazione"];
    $pizza = $_POST["pizza"];
    $impasto = $_POST["tipoI"];
    $aggiunte = $_POST["aggiunte"];

    if (empty($sistemazione) || empty($pizza) || empty($impasto)) {
        $messaggio = "Inserire tutti i dati obbligatori.";
    } else {
        $messaggio = "La pizza $pizza con impasto $impasto";

        if (!empty($aggiunte)) {
            $messaggio = $messaggio . " e aggiunte di " . implode(", ", $aggiunte);
        }

        $messaggio = $messaggio . " è stata correttamente prenotata con sistemazione $sistemazione.";
    }
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.red.min.css">
    <title>myPizza</title>
</head>
<body>
<main class="container" style="max-width: 500px">
    <article>
        <header>
            <h1 style="text-align: center">Prenota da myPizza</h1>
        </header>

        <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post" novalidate>
            <div class="sistemazione">
                <label for="sistemazione">Tipo di sistemazione</label>
                <select id="sistemazione" name="sistemazione">
                    <option value="" disabled selected>Seleziona</option>
                    <option value="domicilio">domicilio</option>
                    <option value="interno">interno</option>
                    <option value="esterno">esterno</option>
                    <option value="veranda">veranda</option>
                </select>
            </div>

            <div class="pizza">
                <label for="pizza">Scegli la pizza</label>
                <select id="pizza" name="pizza">
                    <option value="" disabled selected>Seleziona una pizza</option>
                    <option value="margherita">Margherita</option>
                    <option value="marinara">Marinara</option>
                    <option value="napoli">Napoli</option>
                    <option value="diavola">Diavola</option>
                    <option value="capricciosa">Capricciosa</option>
                    <option value="quattro formaggi">Quattro formaggi</option>
                    <option value="prosciutto e funghi">Prosciutto e funghi</option>
                    <option value="quattro stagioni">Quattro stagioni</option>
                    <option value="bufalina">Bufalina</option>
                    <option value="ortolana">Ortolana</option>
                </select>
            </div>

            <fieldset class="check">
                <legend>Eventuali aggiunte:</legend>
                <label for="pomodoro">
                    <input type="checkbox" id="pomodoro" name="aggiunte[]" value="pomodoro">
                    Pomodoro
                </label>
                <label for="rucola">
                    <input type="checkbox" id="rucola" name="aggiunte[]" value="rucola">
                    Rucola
                </label>
                <label for="pizzaS">
                    <input type="checkbox" id="pizzaS" name="aggiunte[]" value="pizza schiacciata">
                    Pizza Schiacciata
                </label>
            </fieldset>

            <fieldset class="tipoI">
                <legend>Tipo impasto:</legend>
                <label for="sg">
                    <input type="radio" id="sg" name="tipoI" value="senza glutine">
                    Senza Glutine
                </label>
                <label for="cl">
                    <input type="radio" id="cl" name="tipoI" value="classico">
                    Classico
                </label>
            </fieldset>

            <button type="submit" name="prenota">Prenota</button>
        </form>

        <footer>
            <p><?= htmlspecialchars($messaggio) ?></p>
        </footer>
    </article>
</main>
</body>
</html>