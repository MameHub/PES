<?php

# LISTA DE COMUNIDADES AUTONOMAS CON SUS PROVINCIAS -> https://www.mundodeportivo.com/uncomo/educacion/articulo/cuantas-comunidades-autonomas-hay-en-espana-42821.html
# Array asociativo multidimensional con las Comunidades autónomas y sus provincias.
$comunidades = [
    ['Andalucía' => ['Almería', 'Cádiz', 'Córdoba', 'Granada', 'Huelva', 'Jaén', 'Málaga', 'Sevilla']],
    ['Extremadura' => ['Badajoz', 'Cáceres']],
    ['Castilla y león' => ['Ávila', 'Burgos', 'León', 'Salamanca', 'Segovia', 'Soria', 'Palencia', 'Valladolid', 'Zamora']],
    ['Galicia' => ['A Coruña', 'Ourense', 'Pontevedra', 'Lugo']],
    ['Principado de Asturias' => ['Asturias']],
    ['Cantabria' => ['Cantabria']],
    ['País Vasco' => ['Álava', 'Guipuzcoa', 'Vizcaya']],
    ['Comunidad foral de Navarra' => ['Navarra']], 
    ['Aragón' => ['Huesca', 'Teruel', 'Zaragoza']], 
    ['Cataluña' => ['Barcelona', 'Girona', 'Lleida', 'Tarragona']], 
    ['Comunidad valenciana' => ['Alicante', 'Castellón', 'Valencia']],
    ['Región de Murcia' => ['Murcia']],
    ['Castilla la Mancha' => ['Albacete', 'Ciudad Real', 'Cuenca', 'Guadalajara', 'Toledo']],
    ['Comunidad de Madrid' => ['Madrid']], 
    ['La Rioja' => ['La rioja']], 
    ['Ceuta' => ['Ceuta']], 
    ['Melilla' => ['Melilla']], 
    ['Islas Baleares' => ['Ibiza', 'Mallorca', 'Menorca']]
    // ['Islas Canarias' =>
    // ['Las Palmas' => ['Fuerteventura', 'Gran Canaria', 'Lanzarote']],
    // ['Santa Cruz de Tenerife' => ['El Hierro', 'La Gomera', 'La Palma', 'Tenerife']]],
];

# Comprobación de envío de formulario
if (!isset($_POST['submit'])) {
    
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

    </header>

    <main>
        
    <form action="">
            
        <select>

            <!-- <option> -->

                <?php
                
                foreach ($comunidades as $comunidad) {
                    foreach ($comunidad as $nombre => $provincias) {
                        foreach ($provincias as $provinicia) {
                            echo '<option>',$provinicia,'</option>';
                        }
                    }
                }

                ?>

            <!-- </option> -->

        </select>
        <button type="submit">Enviar</button>

    </form>

    </main>

    <footer>

    </footer>

</body>
</html>