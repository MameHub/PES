<?php
$number = 9;
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Número positivo o negativo</title>
</head>
<body>
    <p>Escribe un script que verifique si un número es positivo, negativo o cero</p>

    <?php
    
    if ($number < 0) {
        echo "Él número introducido ($number) es negativo.";
    } elseif ($number > 0) {
        echo "Él número introducido ($number) es positivo.";
    } else {
        echo $number;
    }
    
    ?>

</body>
</html>