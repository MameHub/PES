<?php

// Definimos el array de posiciones
$posicion = []; // Pares de filas y columnas con las posiciones
$nivel = [1, 2, 3, 4, 5];

// Comprobamos si se ha enviado el formulario
$procesaFormulario = false;
if (isset($_POST['enviar'])) {
    $procesaFormulario = true;
}

if ($procesaFormulario) {
    
}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla multiplicar</title>
</head>
<body>

    <!-- Formulario procesado en el mismo documento -->
    <form action="" method="post">
        <label>Seleccione el nivel de la tabla</label>
        <select name="nivel">
            <?php
            for($i = 1; $i <= count($nivel); $i++) {
                echo '<option>',$i,'</option>';
            }
            ?>
        </select>
        <table>
            <?php
            for ($i=0; $i <= 10; $i++) { 
                echo '<tr><td>',$i,'</td>';
                for ($j=0; $j <= 10; $j++) { 
                    echo '<td>',$i*$j,'</td>';
                }
                echo '</tr>';
            }
            ?>
        </table>
    <button type="submit" name="enviar">Enviar</button>    
    </form>

</body>
</html>