<?php
/*
Incorpora a tu servidor un mensaje que indique al usuario el tiempo transcurrido desde su último acceso y un mensaje personalizado en función de éste.
@author Álvaro Cañas
*/

if(!isset($_COOKIE["contador"])){
    setcookie("contador", 0, time() + 3600);
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UD-4. Ejercicio 5</title>
</head>
<body>
    <?php
    
    ?>
</body>
</html>