<?php
/*
@author Álvaro Cañas

Ejercicio 3. Clasificación por edades:
    Escribe un programa que clasifique a una persona según su edad: "niño", "adolescente", "adulto" o "anciano".
*/

$edad = 29;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3 - Condiciones</title>
</head>
<body>
    <?php
    switch (true) {
        case $edad < 18:
            echo "Niño";
            break;
        case $edad < 25:
            echo "Adolescente";
            break;
        case $edad < 65:
            echo "Adulto";
            break;
        default:
            echo "Anciano";
            break;
    }
    ?>
</body>
</html>