<?php
// Carga en variables mes y año e indica el número de días del mes. Utiliza la estructura de control switch.

// Variables
$mes = 9;
$anno = 2024;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
<?php
switch($mes) {

    case 1:
        print"Enero tiene 31 días.";
    break;

    case 2:
        if($anno % 4 == 0) {
            print"Febrero tiene 29 días.";
        } else {
            print"Febrero tiene 28 días.";
        }
    break;

    case 3:
        print"marzo tiene 31 días.";
    break;

    case 4:
        print"Abril tiene 30 días.";
    break;

    case 5:
        print"Mayo tiene 31 días.";
    break;

    case 6:
        print"Junio tiene 30 días.";
    break;

    case 7:
        print"Julio tiene 31 días.";
    break;

    case 8:
        print"Agosto tiene 31 días.";
    break;

    case 9:
        print"Septiembre tiene 30 días.";
    break;

    case 10:
        print"Octubre tiene 31 días.";
    break;

    case 11:
        print"Noviembre tiene 30 días.";
    break;

    case 12:
        print"Diciembre tiene 31 días.";
    break;

    default:
        print"ERROR.";
};
?>
</body>
</html>