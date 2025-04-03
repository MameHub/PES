<?php
        
// Variables.
$anno = date('Y');
$mes = date('m');
$dias = cal_days_in_month(CAL_GREGORIAN, $mes, $anno);
$diasSemana = ["lunes", "martes", "miercoles", "jueves", "viernes", "sábado", "domingo"];

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

    <h1>Calendario</h1>
    <hr>

    </header>

    <main>

    <p>Ejercicio 5. Dado el mes y el año almacenados en variables, escribir un programa que muestre el calendario mensual correspondiente. Marcar el día actual en verde y los festivos en rojo.</p>

        <?php

            // echo '<table>';
            
            // echo '<tr>';
            
            // for ($i=0; $i < count($diasSemana); $i++) { 
            //     echo '<td>',$diasSemana[$i],'</td>';
            // }
            
            // echo '</tr>';

            // echo '</table>';

            for ($i=1; $i <= $nHueco; $i++) { 
                echo 'b';
            }

            for ($i=1; $i <= $nDiasMes; $i++) {
                echo $i;
                if ($i == 7) {
                    echo '</br>';
                }
            }

            // for ($i = 0; $i <= cal_days_in_month(CAL_GREGORIAN, $mes, $anno); $i++) {
            //     echo '$i';
            // }

            
            echo $diasMes;


        ?>

    </main>

    <footer>

    <hr>
    <h2>Actividad 3. Ejercicio 5 de bucles</h2>
    <a href="" target="_blank">Enlace a github</a>
    <h3>Álvaro Cañas González</h3>
    <h3>Programación en entorno servidor</h3>

    </footer>

</body>
</html>