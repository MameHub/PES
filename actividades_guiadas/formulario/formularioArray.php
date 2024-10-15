<?php

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

} else {

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario array</title>
</head>
<body>
    <?php
    if ($lProcesaFormulario) {
        echo "Nombre: $nombre";
        echo "<br/>";
        echo "apellidos: $apellidos";
        echo "<br/>";
        echo "email: $email";
    } else {
    ?>
    <form action="" method="post">
        <input type="text" name="nombre" placeholder="nombre" value=""><br/>
        <input type="text" name="apellidos" placeholder="apellidos" value=""><br/>
        <input type="email" name="email" placeholder="email" value=""><br/>
        <input type="submit" name="enviar" value="Send">
    </form>
} ?>
</body>
</html>

<?php

}

?>