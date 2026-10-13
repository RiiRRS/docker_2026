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

        <form action="<?=$_SERVER['PHP_SELF']?>" method="post">
             <div id="sistemazione">
               <label for="sistemazione"> tipo di sistemazione</label>
               <select id="sistemazione">
                   <option value=" " disabled selected>tipo di sistemazione</option>
                   <option value="domicilio">domicilio</option>
                   <option value="interno">interno</option>
                   <option value="esterno">esterno</option>
               </select>
            </div>
            <div id="pizza">
                <label for="pizza">Scegli la pizza</label>
                <select id="pizza" name="pizza" >
                    <option value="" disabled selected>Seleziona una pizza</option>
                    <option value="margherita">Margherita</option>
                    <option value="marinara">Marinara</option>
                    <option value="napoli">Napoli</option>
                    <option value="diavola">Diavola</option>
                    <option value="capricciosa">Capricciosa</option>
                    <option value="quattro-formaggi">Quattro formaggi</option>
                    <option value="prosciutto-funghi">Prosciutto e funghi</option>
                    <option value="quattro-stagioni">Quattro stagioni</option>
                    <option value="bufalina">Bufalina</option>
                    <option value="ortolana">Ortolana</option>
                </select>
            </div>
            <div id="aggiunte">
                <label for="aggiunte">eventuali aggiunte</label>
                <input type="checkbox" id="pomodoro" name="aggiunte" value="pomodoro">
            </div>

        </form>
    </article>
</main>
</body>
</html>





<?php
