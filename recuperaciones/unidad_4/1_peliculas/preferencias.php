<?php

# Comprobamos que se ha recibido el genero mediante el método GET.
if (isset($_GET['genero'])) {
    
    # Almacenamos dicho genero en una variable.
    $generoSeleccionado = $_GET['genero'];
    
    # Creamos la cookie con dicho genero durante una hora.
    setcookie("genero_seleccionado", $generoSeleccionado, time() + 3600);
    
    # Redirigimos a "index.php" y finalizamos la ejecución de este script.
    header("Location: index.php");
    exit();

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Preferencias</title>
</head>
<body>
    <header>
    <div class="titleSetting">
        <h1>Cinemax</h1>      
    </div>
        <hr>
    </header>
    <section>
        <form action="./index.php" method="post">

            <label for="accion">Acción</label>
            <input type="checkbox" name="accion">

            <label for="aventuras">Aventuras</label>
            <input type="checkbox" name="aventuras">

            <label for="cienciaFiccion">Ciencia Ficción</label>
            <input type="checkbox" name="cienciaFiccion">

            <label for="comedia">Comedia</label>
            <input type="checkbox" name="comedia">

            <label for="crimen">Crimen</label>
            <input type="checkbox" name="crimen">

            <label for="drama">Drama</label>
            <input type="checkbox" name="drama">

            <label for="familia">Familia</label>
            <input type="checkbox" name="familia">

            <label for="fantastico">Fantástico</label>
            <input type="checkbox" name="fantastico">

            <label for="infantil">Infantil</label>
            <input type="checkbox" name="infantil">

            <label for="mafia">Mafia</label>
            <input type="checkbox" name="mafia">

            <label for="terror">Terror</label>
            <input type="checkbox" name="terror">

            <label for="thriller">Thriller</label>
            <input type="checkbox" name="thriller">

        </form>
    </section>
    <footer>
        <hr>
        <h2>Programación en entorno servidor</h2>
        <h2>Unidad 4. Programación en entorno servidor</h2>
        <h3>Álvaro Cañas González</h3>
        <a href="https://github.com/MameHub/PES/tree/cbd7b856eabe91ee4b8fa99bc9d17b8124a0e256/recuperaciones/unidad_4/1_peliculas" target="_blank">Enlace a GitHub</a>
    </footer>
</body>
</html>