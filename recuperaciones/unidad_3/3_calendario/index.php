<!-- <?php
        
// Variables.
// $anno = date('Y');
// $mes = date('m');
// $dias = cal_days_in_month(CAL_GREGORIAN, $mes, $anno);
// $dias = date('t');
// $diasSemana = ["lunes", "martes", "miercoles", "jueves", "viernes", "sábado", "domingo"];

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

            // for ($i=1; $i <= $nHueco; $i++) { 
            //     echo 'b';
            // }

            // for ($i=1; $i <= $nDiasMes; $i++) {
            //     echo $i;
            //     if ($i == 7) {
            //         echo '</br>';
            //     }
            // }

            // for ($i = 0; $i <= cal_days_in_month(CAL_GREGORIAN, $mes, $anno); $i++) {
            //     echo '$i';
            // }

            // echo $dias;


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
</html> -->

<?php 
/**
 * @author Alejandro Fernández Arrayás
 * 
 * Mostrar un calendario mensual basado en las variables $mes y $año.
 * El día actual se marca en verde si coincide con la fecha almacenada en $actual.
 * Los domingos se marcan en rojo.
 */
error_reporting(E_ALL & ~E_DEPRECATED); //Eliminamos la advertencia de la función deprecated
setlocale(LC_TIME, 'es_ES.UTF-8', 'Spanish_Spain', 'es_ES', 'es'); // Configurar en español

// Variables de mes y año
$mes = 4;  // Julio
$año = 2025;

// Fecha actual definida
$actual = date("Y-m-d");

// Nombre del mes
$mes_texto = strftime("%B", strtotime("$año-$mes-01"));
$mes_texto = ucfirst($mes_texto);

// Número de días en el mes
$numDiasMes = date("t", strtotime("$año-$mes-01"));

// Día de la semana del primer día del mes (0=domingo, 6=sábado)
$diaUno = strtotime("$año-$mes-01");
$primerDiaMes = date("w", $diaUno);

function nombreDia($dia, $mes, $año) {
    $fecha = strtotime("$año-$mes-$dia");
    $diaActual = strftime("%A", $fecha);
    return ucfirst($diaActual);
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario</title>
    <style>
        body{
            align-items: center;
            text-align: center;
        }
        .calendario {
            display: grid;
            grid-template-columns: repeat(7, 0fr);
            text-align: center;
            justify-content: center;
        }
        .dia, .nombre-dia {
            width: 70px;
            height: 70px;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 2px;
            background-color: lightgray;
            border-radius: 5px;
            font-size: 1.5em;
        }
        .dia.drojo {
            background-color: red;
            color: white;
        }
        .dia.dverde {
            background-color: green;
            color: white;
        }
        .nombre-dia {
            font-weight: bold;
            background-color: darkgray;
            color: white;
        }
    </style>
</head>
<body>
    <h1>CALENDARIO</h1>
    <h2><?php echo $mes_texto . " " . $año; ?></h2>
    <div class='calendario'>
        <?php 
        // Nombres de los días de la semana
        $diasSemana = ['Lun', 'Mar', 'Miér', 'Jue', 'Vier', 'Sáb', 'Dom'];
        foreach ($diasSemana as $dia) {
            echo "<div class='nombre-dia'>$dia</div>";
        }

        // Espacios en blanco iniciales
        $espacios = ($primerDiaMes == 0) ? 6 : $primerDiaMes - 1;
        for ($i = 0; $i < $espacios; $i++) { 
            echo "<div class='dia'></div>";
        }
        
        // Días del mes
        for ($i = 1; $i <= $numDiasMes; $i++) {
            $nombreDia = nombreDia($i, $mes, $año);
            $clase = 'dia';
            
            if ($nombreDia == 'Domingo') {
                $clase .= ' drojo';
            } elseif (date("Y-m-d", strtotime("$año-$mes-$i")) == $actual) {
                $clase .= ' dverde';
            }
            
            echo "<div class='$clase'>$i</div>";
        }
        ?>
    </div>
</body>
</html>