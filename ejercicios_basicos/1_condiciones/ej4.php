<?php
/*
@author Álvaro Cañas

Ejercicio 4. Días de la semana:
    Crea un Script que reciba un número entre 1 y 7, muestre el día de la semana correspondiente (1 es Lunes, 7 es Domingo).
*/

$diaSemana = 4;
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 4 - Condiciones</title>
</head>
<body>
    <?php
    switch ($diaSemana) {
        case 1:
            echo "Lunes";
            break;
        case 2:
            echo "Martes";
            break;
        case 3:
            echo "Miercoles";
            break;
        case 4:
            echo "Jueves";
            break;
        case 5:
            echo "Viernes";
            break;
        case 6:
            echo "Sábado";
            break;
        case 7:
            echo "Domingo";
            break;
        default:
            echo "El día introducido no es correcto.";
            break;
    }
    ?>
</body>
</html>