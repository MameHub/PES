<?php
/*

@author Álvaro Cañas
*/

// Creamos la cookie si no esta creada.
if (!isset($_COOKIE["usuario"])) {
    setcookie("usuario","Datos usuario", time() + 3600);
}

// Validamos el formulario.
$lProcesaFormulario = false;
if(isset($_POST['enviar'])){
    $lProcesaFormulario = true;
}

// Procesamos el formulario.
if ($lProcesaFormulario) {

    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $recCon = $_POST['recCon'];

    if ($recCon) {
        $vUsuario = $usuario;
        $vPassword = $password;
    } else {
        $vUsuario = "usuario";
        $vPassword = "contraseña";
    }

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

    <?php
    if($lProcesaFormulario) {
        echo "<input type='text' id='usuario' placeholder='usuario'>";
        echo "<input type='text' id='usuario' placeholder='usuario'>";
    }
    ?>

    <!-- Lo procesamos en el mismo documento. -->
    <form action="" method="post">
        <input type="text" id="usuario" placeholder="usuario" value="<?php echo "$vUsuario"; ?>">
        <input type="password" id="password" placeholder="contraseña" value="<?php echo "$vPassword"; ?>">
        <input type="checkbox" id="recCon" name="recCon">
        <label for="recCon">Recordar contrasña</label><br>
        <input type="submit" value="enviar">
    </form>

<br/>
<a href='https://github.com/MameHub/PES/blob/main/unidad_4/actividades_clase/ej3.php'>Ejercicio en GitHub</a>

</body>
</html>