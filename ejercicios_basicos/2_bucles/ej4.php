<?php
/*
@author Álvaro Cañas

Ejercicio 4. Números pares del 1 al 100:
    Utiliza un bucle para imprimir todos los números pares entre 1 y 100.
*/

$number = 1;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 - Bucles</title>
</head>
<body>
    <?php
    while ($number <= 100) {
        $number++;
        if ($number % 2 == 0) {
            echo "$number es par.";
            echo "<br/>";
        }
    }
    ?>
    <br/>
    <a href="https://github.com/MameHub/PES/blob/main/ejercicios_basicos/2_bucles/ej1.php">Ejercicio en GitHub</a>
</body>
</html>