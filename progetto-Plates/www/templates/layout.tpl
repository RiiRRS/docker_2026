<!doctype html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>progetto plates</title>
</head>
<body>
<?php $this->layout('layout',[]);?>

<main>
    <h1>Tabelline</h1>


    <ul>
        <?php foreach ($persone as $key => $persona): ?>
        <li><a href="scheda.php?id=<?= $key ?>"><?=


    </ul>
</main>

</body>
</html>