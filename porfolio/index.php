<?php

$nombre = "Álvaro Cañas Gonález";
$diaNacimiento = "08";
$mesNacimiento = "06";
$annoNacimiento = 1997;
$telefono = 615586378;
$formacion = ["Grado medio de sistemas microinformáticos y redes", "Grado superior de desarrollo de aplicaciones multiplataforma"];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Portfolio</title>
</head>
<body>
    <div class="cabecera">
        <h1>Portfolio de Álvaro Cañas</h1>
    </div>
    <div class="contenido">
        <h2>· Datos personales</h2>
        <p><b>· Nombre:</b> <?php echo $nombre ?></p>
        <p><b>· Fecha de nacimiento:</b>  <?php echo $diaNacimiento, "/", $mesNacimiento, "/", $annoNacimiento ?></p>
        <p><b>· Telefono:</b> <?php echo $telefono ?></p>
        <div class="imagen">
            <img src="./1709596755143.jpg" alt="foto perfil">
        </div>
        <div class="formacion">
            <h3>Formación:</h3>
            <ul>
                <?php foreach ($formacion as $estudios): ?>
                    <li><?php echo htmlspecialchars($estudios) ?></li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
</body>
</html>