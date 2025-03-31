<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Álvaro Cañas</title>
</head>
<body>

<header>

    <h1>Tablero damas</h1>
    <hr>

</header>

<main>

    <?php

    $letras = ["a","b","c","d","e","f","g","h"];
    $numeros = [8,7,6,5,4,3,2,1];
    
    echo '<table class="tablero">';
    
    echo '<tr><td></td>';

    foreach ($letras as $fila) {
        echo '<td>',$fila,'</td>';
    }

    // FILAS
    for($i = 0; $i < 8; $i++) {

        echo '<tr>';

        echo '<td>',$numeros[$i],'</td>';

        // COLUMNAS
        for($j = 0; $j < 8; $j++) {

            // COLOR CASILLA
            if($i % 2 == 0 && $j % 2 == 0 || $i % 2 != 0 && $j % 2 != 0) {
                $color = "blanco";
            } else {
                $color = "negro";
            }
            
            echo '<td class=',$color,'>';

            // FICHAS
            if ($color == "negro" && $i < 3) {
                echo '<span class="fichaRoja">&#x25CF;</span>';
            } elseif ($color == "negro" && $i > 4) {
                echo '<span class="fichaNegra">&#x25CF</span>';
            }

            echo '</td>';

        }

        echo '<td>',$numeros[$i],'</td>';
        
        echo '</tr>';

    }

    echo '<tr>';

    echo '<tr><td></td>';

    foreach ($letras as $fila) {
        echo '<td>',$fila,'</td>';
    }

    echo '</tr>';
    
    echo '</table>';

    ?>

</main>

<footer>

    <hr>
    <h2>Actividad 2. Tablero de damas</h2>
    <a href="https://github.com/MameHub/PES/tree/main/recuperaciones/unidad_3/2_tableroDamas" target="_blank">Enlace a github</a>
    <h3>Álvaro Cañas González</h3>
    <h3>Programación en entorno servidor</h3>

</footer>

</body>
</html>