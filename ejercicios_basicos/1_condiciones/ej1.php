<?php
/*
@author Álvaro Cañas

Ejercicio 1. Número positivo o negativo:
    Escribe un Script que verifique si un número es positivo, negativo o cero.
*/
$number = -3;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1 - Condiciones</title>
</head>
<body>
    <?php
    if ($number > 0) {
        echo "El número es positivo ($number).";
    }
    elseif ($number < 0) {
        echo "El número es negativo ($number).";
    } else {
        echo "El número es 0.";
    }
    ?>
    <br/>
    <a href="https://github.com/MameHub/PES/blob/main/ejercicios_basicos/1_condiciones/ej1.php">Ejercicio en GitHub</a>
</body>
</html>