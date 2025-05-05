<?php

/**
 * @author Álvaro Cañas
 * ENUNCIADO:
 * Crear una aplicación en PHP que almacene en un array un listado de películas organizadas por género, con menú de acceso y preferencias.
 * REQUISITOS:
 * · Definir un array para almacenar películas y género. Guardaremos imagen de la carátula de la película y año de la misma.
 * · Crear una aplicación con menú para acceder a las películas por género. 
 * · Permitir al usuario marcar preferencias de género.
 * · La página de inicio muestra al usuario las películas de su preferencia. Si el usuario no tiene preferencias, se mostrarán las películas del año actual.
 * SALIDA ESPERADA:
 * Aplicación HTML con menú de navegación y opción de preferencias de usuario.
 */

# VARIABLES.
$year = 2025;
$settings = false;
$aPeliculas = [
    ['titulo' => 'El último samurai', 'anno' => 2003, 'genero' => ['Aventuras', 'Accion', 'Drama'], 'caratula' => 'https://pics.filmaffinity.com/the_last_samurai-270445769-large.jpg'],
    ['titulo' => 'Intocable', 'anno' => 2011, 'genero' => ['Comedia', 'Drama'], 'caratula' => 'https://pics.filmaffinity.com/Intocable-218166359-large.jpg'],
    ['titulo' => 'Interestelar', 'anno' => 2014, 'genero' => ['Ciencia ficcion', 'Aventuras', 'Drama'], 'caratula' => 'https://m.media-amazon.com/images/M/MV5BYzdjMDAxZGItMjI2My00ODA1LTlkNzItOWFjMDU5ZDJlYWY3XkEyXkFqcGc@._V1_.jpg'],
    ['titulo' => 'Chappie', 'anno' => 2015, 'genero' => ['Accion', 'Ciencia ficcion'], 'caratula' => 'https://m.media-amazon.com/images/M/MV5BMTUyNTI4NTIwNl5BMl5BanBnXkFtZTgwMjQ4MTI0NDE@._V1_.jpg'],
    ['titulo' => 'Joker', 'anno' => 2019, 'genero' => ['Thriller', 'Crimen'], 'caratula' => 'https://pics.filmaffinity.com/joker-790658206-large.jpg'],
    ['titulo' => 'Robots', 'anno' => 2005, 'genero' => ['Infantil', 'Aventuras'], 'caratula' => 'https://pics.filmaffinity.com/Robots-967630798-large.jpg'],
    ['titulo' => 'The Dark Knight', 'anno' => 2008, 'genero' => ['Thriller', 'Accion'], 'caratula' => 'https://pics.filmaffinity.com/the_dark_knight-102763119-large.jpg'],
    ['titulo' => 'Pulp Fiction', 'anno' => 1994, 'genero' => ['Thriller', 'Crimen'], 'caratula' => 'https://pics.filmaffinity.com/pulp_fiction-210382116-large.jpg'],
    ['titulo' => 'Inception', 'anno' => 2010, 'genero' => ['Ciencia ficcion', 'Thriller'], 'caratula' => 'https://pics.filmaffinity.com/inception-652954101-large.jpg'],
    ['titulo' => 'Mickey 17', 'anno' => 2025, 'genero' => ['Ciencia ficcion', 'Comedia'], 'caratula' => 'https://pics.filmaffinity.com/mickey_17-530854063-large.jpg'],
    ['titulo' => 'Los Cuatro Fantásticos: Primeros pasos', 'anno' => 2025, 'genero' => ['Accion', 'Fantastico'], 'caratula' => 'https://pics.filmaffinity.com/the_fantastic_four_first_steps-302831708-large.jpg'],
    ['titulo' => 'Frankenstein', 'anno' => 2025, 'genero' => ['Terror', 'Drama'], 'caratula' => 'https://pics.filmaffinity.com/frankenstein-629082528-large.jpg'],
    ['titulo' => 'Niños grandes', 'anno' => 2010, 'genero' => ['Comedia', 'Familia'], 'caratula' => 'https://pics.filmaffinity.com/grown_ups-567297059-large.jpg'],
    ['titulo' => 'Scarface', 'anno' => 1983, 'genero' => ['Drama', 'Mafia'], 'caratula' => 'https://pics.filmaffinity.com/scarface-798722679-large.jpg'],
    ['titulo' => 'El corredor del laberito', 'anno' => 2014, 'genero' => ['Ciencia ficcion', 'Accion'], 'caratula' => 'https://pics.filmaffinity.com/the_maze_runner-377064363-large.jpg']
];
# Array con los generos de las películas.
$aGeneros = array();

# Obtenemos los géneros de las películas.
foreach ($aPeliculas as $pelicula) {
    $aGeneros = array_merge($aGeneros, $pelicula['genero']);
}
# Eliminamos los duplicados.
$aGeneros = array_unique($aGeneros);
# Ordenaos alfabéticamente.
sort($aGeneros);

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
        <div class="titleSetting">
            <h1>Cinemax</h1>
            <a href="./preferencias.php">
                <button type="submit">
                    <img src="./img/settings.png" alt="Engranaje preferencias" width="30px"/>
                </button>
            </a>
        </div>
        <nav>
            <ul>
                <li><a href="">Inicio</a></li>
                <!-- Generamos el menú mediante un array que contiene los generos previamente procesado para ordenadrlo alfabéticamente y evitar los repetidos. -->
                <?php
                    foreach ($aGeneros as $generos) {
                        # Mandamos en la url el genero seleccionado.
                        echo '<li><a href="preferencias.php?genero=',urlencode($generos),'">',$generos,'</a></li>';
                    }
                ?>
            </ul>
        </nav>
        <hr>
    </header>
    <main>
    <div class="peliculas">

    <?php
    
    foreach ($aPeliculas as $peliculas) {

        if (isset($_COOKIE['genero_seleccionado'])) {
            $generoSeleccionado = $_COOKIE['genero_seleccionado'];
            
                if (in_array($generoSeleccionado, $peliculas['genero'])) {
                    echo '<div class="pelicula">';
                    echo '<img src="',$peliculas['caratula'],'" alt="Caratula ',$peliculas['titulo'],'" width=240>';
                    echo '<h2>',$peliculas['titulo'],'</h2>';
                    echo '</div>';
                    echo '</br>';
                }

        } else {

                if ($peliculas['anno'] == $year) {
                    echo '<div class="pelicula">';
                    echo '<img src="',$peliculas['caratula'],'" alt="Caratula ',$peliculas['titulo'],'" width=240>';
                    echo '<h2>',$peliculas['titulo'],'</h2>';
                    echo '</div>';
                    echo '</br>';
                }

            }
    }

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