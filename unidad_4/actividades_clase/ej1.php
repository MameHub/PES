<?php
/*

@author Álvaro Cañas
*/

// Crear cookie.
setcookie("cookie", "hola mundo", time() +60);

echo "Inicio";
echo "<br/>";

if(isset($_COOKIE['cookie'])){
    // Comprobamos si existe la cookie.
    echo $_COOKIE["cookie"];
}

echo "<br/>";
echo "Fin";

echo "<br/>";
echo "<a href='https://github.com/MameHub/PES/blob/main/unidad_4/actividades_clase/ej1.php'>Ejercicio en GitHub</a>";
?>