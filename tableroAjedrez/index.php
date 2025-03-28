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

    <h1>Tablero ajedrez</h1>
    <hr>

</header>

<main>

    <?php

    $letras = ["a","b","c","d","e","f","g","h"];
    $numeros = [1,2,3,4,5,6,7,8];

    echo '<div class="juego">';
    
    echo '<table class="tablero">';

    foreach ($numeros as $columnas) {
        echo '<p>',$columnas,'</p>';
    };
    
    // FILAS
    for($i = 0; $i < 8; $i++) {

        echo '<tr>';
    
        // COLUMNAS
        for($j = 0; $j < 8; $j++) {

            if($i % 2 == 0 && $j % 2 == 0 || $i % 2 != 0 && $j % 2 != 0) {
                $color = "blanco";
                
            } else {
                $color = "negro";
            }
            
            echo '<td class=',$color,'>',$j,'</td>';

        }
        
        echo '</tr>';

    }

    echo '<tr>';

    echo '<p>';
    foreach ($letras as $fila) {
        echo '<td>',$fila,'</td>';
    }
    echo '</p>';

    echo '</tr>';
    
    echo '</table>';

    echo '</div>';

    ?>

</main>

<footer>

    <hr>
    <h2>Ejercicio nx tablero ajedrez</h2>
    <h3>Álvaro Cañas González</h3>
    <h3>Programación en entorno servidor</h3>

</footer>

</body>
</html>