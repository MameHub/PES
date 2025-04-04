<?php

$n = 0;
$i = 0;

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suma de los 50 primeros números</title>
</head>
<body>
    <p>Calcula la suma de los primeros 50 números naturales usando un bucle while</p>

    <?php
    
    while ($i <= 50) {
        $n += $i;
        $i++;
    }

    echo $n;
    
    ?>

</body>
</html>