<?php

/**
 * Comunidades autónomas y provincias.
 * 
 * @author Álvaro Cañas
 */

# LISTA DE COMUNIDADES AUTONOMAS CON SUS PROVINCIAS -> https://www.mundodeportivo.com/uncomo/educacion/articulo/cuantas-comunidades-autonomas-hay-en-espana-42821.html

# Variables.
$provinciaMostrada = "";

# Array asociativo con las Comunidades autónomas y sus provincias.
$comunidades = [
    'Andalucía' => ['Almería', 'Cádiz', 'Córdoba', 'Granada', 'Huelva', 'Jaén', 'Málaga', 'Sevilla'],
    'Extremadura' => ['Badajoz', 'Cáceres'],
    'Castilla y león' => ['Ávila', 'Burgos', 'León', 'Salamanca', 'Segovia', 'Soria', 'Palencia', 'Valladolid', 'Zamora'],
    'Galicia' => ['A Coruña', 'Ourense', 'Pontevedra', 'Lugo'],
    'Principado de Asturias' => ['Asturias'],
    'Cantabria' => ['Cantabria'],
    'País Vasco' => ['Álava', 'Guipuzcoa', 'Vizcaya'],
    'Comunidad foral de Navarra' => ['Navarra'], 
    'Aragón' => ['Huesca', 'Teruel', 'Zaragoza'], 
    'Cataluña' => ['Barcelona', 'Girona', 'Lleida', 'Tarragona'], 
    'Comunidad valenciana' => ['Alicante', 'Castellón', 'Valencia'],
    'Región de Murcia' => ['Murcia'],
    'Castilla la Mancha' => ['Albacete', 'Ciudad Real', 'Cuenca', 'Guadalajara', 'Toledo'],
    'Comunidad de Madrid' => ['Madrid'], 
    'La Rioja' => ['La rioja'], 
    'Ceuta' => ['Ceuta'], 
    'Melilla' => ['Melilla'], 
    'Islas Baleares' => ['Ibiza', 'Mallorca', 'Menorca'],
    'Islas Canarias' => ['Fuerteventura', 'Gran Canaria', 'Lanzarote', 'El Hierro', 'La Gomera', 'La Palma', 'Tenerife']
];

/**
 * Obtenemos una provincia aleatoria.
 * 
 * @param array $array multidimensional asociativo con las comunidades autonomas y sus provincias.
 * @return String Provincia aleatoria del array.
 */
function provinciaAleatoria($array) {
    $comunidadAleatoria = array_rand($array, 1);
    $array[$comunidadAleatoria];
    return $array[$comunidadAleatoria][array_rand($array[$comunidadAleatoria])];
}

/**
 * Comprobamos y mostramos por pantalla que la provincia pertenece a la comunidad autónoma seleccionada, modificamos la clase para el diseño.
 * 
 * @param array $comunidades Array multidimensional asociativo con todas las comunidades y sus provincias.
 * @param string $comunidadSeleccionada Comunidad autónoma seleccionada.
 * @param string $provinciaMostrada Provincia generada aleatoriamente.
 * @return string Devuelve una cadena de texto informando si el usuario ha acertado o se ha equivocado y modifica la clase de la etiqueta que muestra el resultado.
 */
function comprobacion($comunidades, $comunidadSeleccionada, $provinciaMostrada) {

    $provinciaEncontrada = false;
    
    foreach ($comunidades as $comunidad => $provincias) {
        if ($comunidad == $comunidadSeleccionada) {
            foreach ($provincias as $provincia) {
                if ($provincia == $provinciaMostrada) {
                    $provinciaEncontrada = true;
                    break;
                }
            }
            break;
        }
    }

    if ($provinciaEncontrada) {
        echo '<p style="color: green">"ENHORABUENA! Has acertado"</p>';
    } else {
        echo '<p style="color: red">Lo siento, ',$provinciaMostrada,' no se encuentra en ',$comunidadSeleccionada,'.</p>';
    }
    

}

# Comprobación de envío de formulario.
if (isset($_POST['enviar'])) {
    // echo $_POST['validate'];
    comprobacion($comunidades, $_POST['comunidadSeleccionada'], $_POST['validate']);
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comunidades autónomas, provincias</title>
</head>
<body>

    <header>
        <h1>Relaciona la provincia con su comunidad autónoma</h1>
        <hr>
    </header>

    <main>
    <form method="post">

    <?php
    # Obtenemos una provincia de forma aleatoria y la almacenamos en una variable.
    $provinciaMostrada = provinciaAleatoria($comunidades);
    # Mostramos una provicia de forma aleatoria.
    echo '<label><b>',$provinciaMostrada,'</b> se encuentra en: </label>';
    ?>

        <select name="comunidadSeleccionada">

                <?php
                # Mostramos un desplegable con las comunidades autónomas.
                foreach ($comunidades as $comunidad => $provincia) {
                    echo '<option>',$comunidad,'</option>';
                }
                ?>

        </select>
        <input type="hidden" name="validate" value=<?php echo $provinciaMostrada ?>>
        <button type="submit" name="enviar">Enviar</button>

    </form>
    </main>

    <footer>
        <hr>
        <h2>Álvaro Cañas</h2>
        <h3>Programació en entorno servidor</h3>
        <a href="https://github.com/MameHub/PES/tree/main/recuperaciones/unidad_3/5_comunidadesAutonomas/index.php" target="_blank">Enlace a GitHub</a>
    </footer>

</body>
</html>