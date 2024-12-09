<?php
/*
@author Álvaro Cañas

Ejercicio 5. Factorial de un número:
    Calcula el factorial de un número dado usando un bucle for.
*/

$factorial = 9;
$resultado = 1;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5 - Bucles</title>
</head>
<body>
    <?php
    for ($i = 1; $i <= $factorial; $i++) { 
        $resultado *= $i;
    }
    echo "El factorial de $factorial es $resultado";
    ?>
    <br/>
    <a href="https://github.com/MameHub/PES/blob/main/ejercicios_basicos/2_bucles/ej5.php">Ejercicio en GitHub</a>
</body>
</html>