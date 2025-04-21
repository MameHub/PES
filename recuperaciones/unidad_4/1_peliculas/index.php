<?php

/**
 * @author Álvaro Cañas
 * ENUNCIADO:
 * Crear una aplicación en PHP que almacene en un array un listado de películas organizadas por género, con menú de acceso y preferencias.
 * REQUISITOS:
 * · Definir un array para almacenar pelíuclas y género. Guardaremos imagen de la carátula de la película y año de la misma.
 * · Crear una aplicación con menú para acceder a las películas por género. 
 * · Permitir al usuario marcar preferencias de género.
 * · La página de inicio muestra al usuario las películas de su preferencia. Si el usuario no tiene preferencias, se mostrarán las películas del año actual.
 * SALIDA ESPERADA:
 * Aplicación HTML con menú de navegación y opción de preferencias de usuario.
 */

 # VARIABLES.
 $year = 2025;
 $aPeliculas = [
    ['titulo' => 'El último samurai', 'anno' => 2003, 'genero' => ['Aventuras', 'Accion', 'Drama'], 'caratula' => 'https://es.web.img3.acsta.net/medias/nmedia/18/67/78/13/20066706.jpg'],
    ['titulo' => 'Intocable', 'anno' => 2011, 'genero' => ['Comedia', 'Drama'], 'caratula' => 'https://pics.filmaffinity.com/Intocable-218166359-large.jpg'],
    ['titulo' => 'Interestelar', 'anno' => 2014, 'genero' => ['Ciencia ficcion', 'Aventuras', 'Drama'], 'caratula' => 'https://m.media-amazon.com/images/M/MV5BYzdjMDAxZGItMjI2My00ODA1LTlkNzItOWFjMDU5ZDJlYWY3XkEyXkFqcGc@._V1_.jpg']
];

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Álvaro Cañas</title>
</head>
<body>
    <header>
        <h1>Cinemax</h1>
        <nav>
            <ul>
                <li><a href="">Inicio</a></li>
                <li><a href="">Acción</a></li>
                <li><a href="">Aventuras</a></li>
                <li><a href="">Ciencia ficción</a></li>
                <li><a href="">Drama</a></li>
            </ul>
        </nav>
        <hr>
    </header>
    <main>
    
    <div>
        <img src="https://es.web.img3.acsta.net/medias/nmedia/18/67/78/13/20066706.jpg" alt="Caratula el último samurai" width="240">
        <h2>El último samurai</h2>
    </div>

    <div class="peliculas">
        
        <?php

        ?>

    </div>
    
    </main>
    <footer>
        <hr>
        <h2>Programación en entorno servidor</h2>
        <h2>Unidad 4. Programación en entorno servidor</h2>
        <h3>Álvaro Cañas González</h3>
        <a href="https://github.com/MameHub/PES/tree/cbd7b856eabe91ee4b8fa99bc9d17b8124a0e256/recuperaciones/unidad_4/1_peliculas" target="_blank">Enlace a GitHub</a>
    </footer>
</body>
</html>