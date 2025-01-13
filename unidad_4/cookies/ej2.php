<?php
/*

@author Álvaro Cañas
*/

// Crear cookie.
if (isset($_COOKIE["cookie"])) {
    setcookie("cookie", "hola mundo", time() - 1);
    echo "Cookie borrada";
}

echo "<br/>";
echo "<a href='https://github.com/MameHub/PES/blob/main/unidad_4/actividades_clase/ej2.php'>Ejercicio en GitHub</a>";

?>