<?php
/*
Modifica la página inicial realizada, incluyendo una imagen de cabecera en función de la
estación del año en la que nos encontremos y un color de fondo en función de la hora del día.
*/

// Variables.
$dia = date("j");
$mes = date("n");
$hora = date("G");
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
<?php

?>
<!--
    Primavera: 20 marzo - 21 junio
    Verano: 21 junio - 23 septiembre
    Otoño: 23 septiembre - 21 diciembre
    Invierno: 21 diciembre - 20 marzo
-->
    <div class="cabecera">
        <h1>Portfolio de Álvaro Cañas</h1>
    </div>
    <div class="contenido">
        <h2>· Datos personales</h2>
        <p><b>· Nombre:</b> Álvaro Cañas González</p>
        <p><b>· Fecha de nacimiento:</b> 08/06/1997</p>
        <p><b>· Telefono:</b> 615586378</p>
        <div class="imagen">
            <img src="img/1709596755143.jpg" alt="foto perfil">
        </div>
        <div class="formacion">
            <h3>Formación:</h3>
            <ul>
                <li>Grado medio de sistemas microinformáticos y redes</li>
                <li>Grado superior de desarrollo de aplicaciones multiplataforma</li>
            </ul>
        </div>
    </div>
</body>
</html>