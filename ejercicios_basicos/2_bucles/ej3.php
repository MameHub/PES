<?php
/*
@author Álvaro Cañas

Ejercicio 3. Tabla de multiplicar:
    Escribe un Script que muestre la tabla de multiplicar de un número dado (del 1 al 100).
*/

$number = 9;

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 - Bucles</title>
</head>
<body>
    <?php
    for ($i = 1; $i <= 100; $i++) { 
        echo "$number · $i = " . ($number * $i);
        echo "<br/>";
    }
    ?>
    <br/>
    <a href="https://github.com/MameHub/PES/blob/main/ejercicios_basicos/2_bucles/ej3.php">Ejercicio en GitHub</a>
</body>
</html>