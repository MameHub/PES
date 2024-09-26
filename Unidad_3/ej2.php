<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
<?php
// Carga en variables mes y año e indica el número de días del mes. Utiliza la estructura de control switch.

// Variables
$mes = 9;
$anno = 2024;

switch(mes) {

    case 1:
        echo"Enero tiene 31 días.";
    break;
    case 2:
        if(anno % 4 == 0) {
            echo"Febrero tiene 29 días.";
        } else {
            echo"Febrero tiene 28 días.";
        }
    break;
    case 3:
        echo"marzo tiene 31 días.";
    break;
    case 4:
        echo"Abril tiene 30 días.";
    break;
    case 5:
        echo"Mayo tiene 31 días.";
    break;
    case 6:
        echo"Junio tiene 30 días.";
    break;
    case 7:
        echo"Julio tiene 31 días.";
    break;
    case 8:
        echo"Agosto tiene 31 días.";
    break;
    case 9:
        echo"Septiembre tiene 30 días.";
    break;
    case 10:
        echo"Octubre tiene 31 días.";
    break;
    case 11:
        echo"Noviembre tiene 30 días.";
    break;
    case 12:
        echo"Diciembre tiene 31 días.";
    break;
    default:
        echo"ERROR.";

};

?>
</body>
</html>