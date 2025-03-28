<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Álvaro Cañas</title>
</head>
<body>

    <?php

    $letras = ["a","b","c","d","e","f","g","h"];
    $numeros = [1,2,3,4,5,6,7,8];
    
    echo '<table class="tablero">';
    
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
    
    echo '</table>';

    // POSICIÓN LETRAS
    // foreach ($array as $valor) {
    //     echo '<p>',$valor,'</p>';
    // };

    ?>hola
</body>
</html>