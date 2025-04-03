<?php
$n1 = 1;
$n2 = 2;
$n3 = 3;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mayor de tres números</title>
</head>
<body>
    <p>Dado tres números, determina cuál es el mayor de los tres</p>

    <?php

    if ($n1 > $n2) {
        if ($n1 > $n3) {
            echo "$n1 es mayor que $n2 y $n3";
        } elseif ($n3 > $n2) {
            echo "$n3 es mayor que $n1 y que $n2";
        }
    } elseif ($n2 > $n3) {
        echo "$n2 es mayor que $n1 y $n3";
    } else {
        echo "$n3 es mayor que $n1 y $n2";
    }
    
    ?>

</body>
</html>