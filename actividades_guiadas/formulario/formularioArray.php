<?php
$i = array(
    'nombre' => '',
    'apellido' => '',
    'edad' => ''
);
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario array</title>
</head>
<body>
    <form action="procesa_array.php" method="post">
        <?php
        foreach ($i as $key => $value) {
            echo "<input type='text' name='$i' placeholder='$i' value=''>";
        };
        ?>
        <input type="submit" name="enviar" value="Send">
    </form>
</body>
</html>