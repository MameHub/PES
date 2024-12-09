<?php
/*
@author Álvaro Cañas

Ejercicio 2. Suma de los primeros 50 números:
    Calcula la suma de los primeros 50 números naturales usando un bucle while.
*/

$i = 1;
$number = 0;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2 - Bucles</title>
</head>
<body>
    <?php
    while ($i < 50) {
        $i++;
        $number += $number;
    }
    echo $number;
    ?>
    <br/>
    <a href="https://github.com/MameHub/PES/blob/main/ejercicios_basicos/2_bucles/ej2.php">Ejercicio en GitHub</a>
</body>
</html>