<?php

    # Variables
    

    # Creamos la cookie.
    // setcookie("cookie", "cookie de duración limitada", time() + 10);

    /**
     * 
     */
    function creacionCookie($nombre, $valor, $duracion) {
        if (!isset($_COOKIE[$nombre])) {

            setcookie($nombre, $valor, time() + $duracion);
            
            for ($i = $duracion; $i > 0; $i--) { 
                echo $i;
            }

        } else {
            echo '<p>Ya hay una cookie con ese nombre</p>';
        }
        
    }

    /**
     * 
     */
    function comprobacionCookie($nombre) {

    }

    /**
     * 
     */
    function eliminacionCookie($nombre) {

    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>
    <header>
        <h1>Actividades de clase</h1>
        <h2>Unidad 4 - Cookies</h2>
        <ol>
            <li>Escriba una página que permita crear una cookie de duración limitada, comprobar el estado de la cookie y destruirla.</li>
        </ol>
    </header>
    <main>
    <?php

        creacionCookie("cookie", "duracion de 10 segundos", 10);
        
        # Mostramos una cookie en caso de que exista.
        if (isset($_COOKIE['cookie'])) {
            echo $_COOKIE["cookie"];
        } else {
            echo '<p>No se encuentra ninguna cookie.</p>';
        }

    ?>
    </main>
    <footer>
            <h2>Álvaro Cañas González</h2>
            <h3>Programación en entorno servidor</h3>
            <h3>Unidad 4 - Programación en entorno servidor [Cookies]</h3>
            <a href="https://github.com/MameHub/PES/blob/9d948c3bd8364de057d0484047cc13eb1c360f04/recuperaciones/unidad_4/actividadesClase/ejercicio1.php" target="_blank">Enlace a GitHub</a>
    </footer>
</body>
</html>