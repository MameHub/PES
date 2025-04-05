<?php

    # Array multidimensional asociativo.
    $array =
    # Primer array
    ["Meses del año" => ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"],
    # Segundo array
    "Tablero barcos" => ["Fila" => ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J"],
    "Columna" => ["1", "2", "3", "4", "5", "6", "7", "8", "9", "10"]],
    # Tercer array
    "Notas 2 DAW" => [["Raúl Bermúdez González" => 9], ["Carlos Borreguero Redondo" => 8], ["Álvaro Cañas González" => 3], ["Miguel Carmona Cicchetti" => 8], ["Alejandro Carrasco Castellano" => 3], ["Mostafa Cherif Mouaki Almabouada" => 4], ["Alejandro Coronado Ortega" => 6], ["Juan Diego Delgado Morente" => 2], ["Marlon Jafet Escoto García" => 2], ["Ángel Fernández Ariza" => 5], ["Alejandro Fernandez Arrayás" => 6], ["Daniel Fernández Balsera" => 5], ["Jesús Ferrer López" => 6], ["Jesús Frias Rojas" => 5], ["Manuel Galán Navas" => 6], ["Víctor García Báez" => 2], ["Lucía García Díaz" => 1], ["Adrián González Martinez" => 5], ["Jesús López Funes" => 5], ["Enrique Mariño Jiménez" => 10], ["Oscar Martín-Castaño Carrillo" => 6], ["Jose maría Mayén Pérez" => 9], ["Pablo Mérida Velasco" => 6], ["Héctor Mora Sánchez" => 5], ["Luis Pérz Cantarero" => 2], ["Carlos Romero Romero" => 6], ["Javier Ruiz Molero" => 8], ["Alejandro Vaquero Abad" => 6], ["Luís Miguel Villén Moyano" => 6]],
    # Cuarto array
    "Verbos irregulares inglés" => ["To awake", "To be", "To beat", "To become", "To begin", "To bend", "To bet", "To bind", "To bite", "To bleed", "To blow", "To break", "To bring", "To build", "To burn", "To buy", "To catch", "To come", "To cost", "To cut", "To choose", "To deal", "To dig", "To do", "To draw", "To dream"],
    # Quinto array
    "Información continentes" => []
    ];
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array ejercicios</title>
</head>
<body>
    <p>Definir un array que permita almacenar y mostrar la siguiente información</p>
    <ol type="a">
        <li>Meses del año</li>
        <li>Tablero para jugar al juego de los barcos</li>
        <li>Nota de los alumnos de 2º DAW para el módulo DWES</li>
        <li>Verbos irregulares en inglés</li>
        <li>Información sobre continentes, países, capitales y banderas</li>
    </ol>

    <?php

    foreach ($array as $key => $value) {
        echo "{$key} => {$value}";
    }
    
    ?>

</body>
</html>