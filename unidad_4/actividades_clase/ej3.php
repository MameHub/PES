<?php
/*

@author Álvaro Cañas
*/

// Creamos la cookie si no esta creada.
if (!isset($_COOKIE["usuario"])) {
    setcookie("usuario","", time() + 3600);
}

$lProcesaFormulario = false;
if(isset($_POST['enviar'])){
    $lProcesaFormulario = true;
}

if ($lProcesaFormulario) {

    $nombre = $_POST['nombre'];
    $apellidos = $_POST['apellidos'];
    $email = $_POST['email'];

    if (!FILTER_VAR(value:$email, filter:FILTER_VALIDATE_EMAIL)) {
        $lProcesaFormulario = false;
    }

    echo "Nombre: $nombre";
    echo "<br/>";
    echo "apellidos: $apellidos";
    echo "<br/>";
    echo "email: $email";

}

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UD-4. Ejercicio 3</title>
</head>
<body>

    <form action="" method="post">
        <input type="text" placeholder="usuario">
        <input type="password" placeholder="contraseña">
        <input type="checkbox" id="recCon" name="recCon">
        <label for="recCon">Recordar contrasña</label><br>
        <input type="submit" value="enviar">
    </form>

    <?php
    
    ?>

<br/>
<a href='https://github.com/MameHub/PES/blob/main/unidad_4/actividades_clase/ej3.php'>Ejercicio en GitHub</a>

</body>
</html>