<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Richiesta corsi di lingua</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@picocss/pico@2/css/pico.min.css">

</head>
<body>
<main class="container">
    <h2>Richiesta corsi di lingua</h2>

    <form id="form" action="corso.php" method="post">
        <div class="riga">
            <label for="cognome">Cognome</label>
            <input type="text" id="cognome" name="cognome" required>
        </div>

        <div class="riga">
            <label for="nome">Nome</label>
            <input type="text" id="nome" name="nome" required>
        </div>

        <div class="riga">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>

        <label for="corsolingua">corso di lingua:</label>
        <select id="corsolingua" name="corsolingua" required>
            <option value="inglese">inglese</option>
            <option value="francese">francese</option>
            <option value="tedesco">tedesco</option>
        </select>

        <fieldset>
            <legend>livello:</legend>
            <label for="base">Base
                <input type="radio" id="base" name="livello" value="base" required>
            </label>
            <label for="intermedio">Intermedio
                <input type="radio" id="intermedio" name="livello" value="intermedio">
            </label>
            <label for="avanzato">Avanzato
                <input type="radio" id="avanzato" name="livello" value="avanzato">
            </label>
        </fieldset>

        <fieldset class="check">
            <legend>Preferenza orario:</legend>
            <label for="mattino">
                <input type="checkbox" id="mattino" name="orariom" value="mattino">
                Mattino
            </label>
            <label for="pomeriggio">
                <input type="checkbox" id="pomeriggio" name="orariop" value="pomeriggio">
                Pomeriggio
            </label>
            <label for="sera">
                <input type="checkbox" id="sera" name="orarios" value="sera">
                Sera
            </label>
        </fieldset>

        <label for="altreRichieste">Altre richieste:</label>
        <textarea id="altreRichieste" name="altreRichieste" rows="5"></textarea>

        <button type="reset" class="secondary">Reset</button>
        <button type="submit">Invia</button>
    </form>
</main>
</body>
</html>