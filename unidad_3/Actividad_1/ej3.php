<?php
//Carga fecha de nacimiento en variables y calcula la edad.

// Variables.
$diaNacimiento = 8;
$mesNacimiento = 6;
$annoNacimiento = 1997;
$diaActual = date("d");
$mesActual = date("m");
$annoActual = date("Y");
$edadActual;

// Calculo edad.
$edadActual = $annoActual - $annoNacimiento;

// Ajuste edad.
if ($mesActual < $mesNacimiento || ($mesActual == $mesNacimiento && $diaActual < $diaNacimiento)) {
    $edad--;
};
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
<?php
echo "Tu edad actual es de $edadActual años.";
?>
</body>
</html>