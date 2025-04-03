<?php
$dia = 3;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Días de la semana</title>
</head>
<body>
    <p>Crea un script que reciba un número entre 1 y 7, y muestre el día de la semana correspondiente (1 es Lunes, 7 es Domingo)</p>

    <?php

    switch ($dia) {
        case $dia == 1:
            echo 'Lunes';
            break;
        case $dia == 2:
            echo 'Martes';
            break;
        case $dia == 3:
            echo 'Miercoles';
            break;
        case $dia == 4:
            echo 'Jueves';
            break;
        case $dia == 5:
            echo 'Viernes';
            break;
        case $dia == 6:
            echo 'Sábado';
            break;
        case $dia == 7:
            echo 'Domingo';
            break;
        default:
            echo 'El día introducido no es válido.';
            break;
    }
    
    ?>

</body>
</html>