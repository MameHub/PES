<?php

$factorial = 5;
$resultado = 1;

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Factorial de un número</title>
</head>
<body>
    <p>Calcula el factorial de un número dado usando un bucle for</p>

    <?php
    
    for ($i=1; $i <= $factorial; $i++) { 
        $resultado *= $i;
    }

    echo $resultado
    
    ?>

</body>
</html>