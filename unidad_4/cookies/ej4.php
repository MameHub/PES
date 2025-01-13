<?php
/*

@author Álvaro Cañas
*/

// Comprobamos si la cookie esta creada, si no la creamos.
if(!isset($_COOKIE["contador"])){
    // Creamos la cookie.
    setcookie("contador", 0, time() + 3600);
} else {
    // Incrementamos el contador de la cookie.
    $contador = $_COOKIE['contador'] + 1;
    // Modificamos la cookie creada anteriormente con el valor del contador.
    setcookie("contador", $contador, time() + 3600);
}

echo $_COOKIE['contador'];

echo "<br/>";
echo "<a href='https://github.com/MameHub/PES/blob/main/unidad_4/actividades_clase/ej4.php'>Ejercicio en GitHub</a>";

?>