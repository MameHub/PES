<?php
/*
Crea un script para sumar una serie de números. El número de números a sumar será introducido en un formulario.
*/

$procesaFormulario = false;
$total = 0;
$n1 = 0;
$n2 = 0;
$n3 = 0;

if (isset($_POST["enviar"])) {
    $procesaFormulario = true;
}

if ($procesaFormulario) {
    $n1 = $_POST["n1"];
    $n2 = $_POST["n2"];
    $n3 = $_POST["n3"];
    $total = $n1 + $n2 + $n3;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <form action="#" method="post">
        <label for="">Numero 1: </label>
        <input type="number" name="n1" id="n1">
        <br/>
        <label for="">Numero 2: </label>
        <input type="number" name="n2" id="n2">
        <br/>
        <label for="">Numero 3: </label>
        <input type="number" name="n3" id="n3">
        <br/>
        <input type="reset" value="limpiar">
        <input type="submit" value="enviar" name="enviar">
    </form>
    <?php
    echo $n1 . " + ". $n2 . " + " . $n3 . " = " . $total;
    ?>
</body>
</html>