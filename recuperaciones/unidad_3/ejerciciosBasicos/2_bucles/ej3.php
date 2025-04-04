<?php

$n = 91;

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla de multiplicar</title>
</head>
<body>
    <p>Escribe un script que muestre la tabla de multiplicar de un número dado (del 1 al 100)</p>

    <?php
    
    for ($i=0; $i <= 10; $i++) { 
        echo "$n · $i = ", ($n * $i);
        echo '<br/>';
    }
    
    ?>

</body>
</html>