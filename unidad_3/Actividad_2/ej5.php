<?php
/*
Dado el mes y año almacenados en variables, escribir un programa que muestre el calendario mensual correspondiente. Marcar el día actual en verde y los festivos en rojo.
*/

$dias;
$mes = 1;
$anno = 1997;

switch ($mes) {
    case 1:
        $dias = 31;
        break;
    case 2:
        if($anno % 4 == 0){
            $dias = 29;
        } else{
            $dias = 28;
        }
        break;
    case 3:
        $dias = 31;
        break;
    case 4:
        $dias = 30;
        break;
    case 5:
        $dias = 31;
        break;
    case 6:
        $dias = 30;
        break;
    case 7:
        $dias = 31;
        break;
    case 8:
        $dias = 31;
        break;
    case 9:
        $dias = 30;
        break;
    case 10:
        $dias = 31;
        break;
    case 11:
        $dias = 30;
        break;
    case 12:
        $dias = 31;
        break;
    default:
        echo "Error";
        break;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
<?php
    for ($i=1; $i <= $dias; $i++) { 
        echo $i;
        echo "<br/>";
    }
?>
</body>
</html>