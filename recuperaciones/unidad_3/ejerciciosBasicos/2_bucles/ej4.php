<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números pares del 1 al 100</title>
</head>
<body>
    <p>Utiliza un bucle para imprimir todos los números pares entre 1 y 100</p>

    <?php
    
    for ($i=0; $i <= 100; $i++) { 
        
        if ($i % 2 == 0) {
            echo $i," ";
        }
    }
    
    ?>

</body>
</html>