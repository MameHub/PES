<?php

# LISTA DE COMUNIDADES AUTONOMAS CON SUS PROVINCIAS -> https://www.mundodeportivo.com/uncomo/educacion/articulo/cuantas-comunidades-autonomas-hay-en-espana-42821.html
# Variables.
# Clases estilos.
$correcto = "green";
$incorrecto = "red";
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

# Comprobación de envío de formulario
$procesaFormulario = false;
if (isset($_POST['enviar'])) {
    $procesaFormulario = true;
}
# Recepción de formulario
if ($procesaFormulario) {
    # Comprobamos que el formulario haya sido enviado para evitar fallos en la recarga[...].
    if ($_POST['validate'] == 1) {
        # Mostramos el resultado.


        # echo '<p>',$provinciaRandom,'</p>';
        echo $_POST;
    }
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
        
    <?php

    # Mostramos una provicia de forma aleatoria.
    echo '<label>',array_rand($comunidades, 1),'</label>' #Corregir, solo muestra comunidades en vez de provincias.

    ?>
            
        <select>

                <?php
                
                # Mostramos un desplegable con las comunidades autónomas.
                foreach ($comunidades as $comunidad => $provincia) {
                    echo '<option>',$comunidad,'</option>';
                }

                ?>

        </select>

        <input type="hidden" name="validate" value="1">

        <button type="submit" name="enviar">Enviar</button>

    </form>

    </main>

    <footer>

    </footer>

</body>
</html>