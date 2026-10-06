<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>tavola-pitagorica</title>
</head>
    <body>
    <h1>Tavola Pitagorica</h1>
    <table>
        <?php
        echo "<tr>";
        echo "<th>X</th>";
        for ($i = 0; $i < 11; $i++) {
            echo "<th>$i</th>";
        }
        echo "<tr>";
        for ($j = 0; $j < 11; $j++) {
         echo "<th>$j</th>";

            for ($k = 0; $k < 11; $k++) {
                $p=$j*$k;
                echo "<th>$p</th>";
            }
            echo "<tr>";
        }







        ?>

    </table>
    </body>
</html>
