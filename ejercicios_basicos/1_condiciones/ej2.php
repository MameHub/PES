<?php
/*
@author Álvaro Cañas

Ejercicio 2. Mayor de tres números:
    Dado tres números, determina cuál es mayor de los tres.
*/

$a = 3;
$b = 5;
$c = 9;

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 - Condiciones</title>
</head>
<body>
    <?php
    
    if ($a >= $b) {
        if ($a >= $c) {
            if ($b >= $c) {
                echo "$a > $b > $c";
            } else {
                echo "$a > $c > $b";
            }
        } else if ($b >= $c) {
            echo "$c > $b > $a";
        } else {
            echo "$c > $a > $b";
        }
    } else if ($b >= $c) {
        if ($c >= $a) {
            echo "$b > $c > $a";
        } else {
            echo "$b > $a > $c";
        }
    } else if ($c >= $a) {
        if ($c >= $b) {
            echo "$c > $b > $a";
        }
    }
    
    ?>
    <br/>
    <a href="https://github.com/MameHub/PES/blob/main/ejercicios_basicos/1_condiciones/ej2.php">Ejercicio en GitHub</a>
</body>
</html>