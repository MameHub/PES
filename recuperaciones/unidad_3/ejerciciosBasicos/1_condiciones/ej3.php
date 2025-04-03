<?php
$edad = 19;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clasificación por edades</title>
</head>
<body>
    <p>Escribe un programa que clasifique a una persona según su edad: "niño", "adolescente", "adulto" y "anciano"</p>

    <?php

    switch ($edad) {
        case $edad < 14:
            echo 'Niño';
            break;
        case $edad < 22:
            echo 'Adolescente';
            break;
        case $edad < 60:
            echo 'Adulto';
            break;
        case $edad < 100:
            echo 'Anciano';
            break;
        default:
            echo 'La edad introducida no es válida.';
            break;
    }
    
    ?>

</body>
</html>