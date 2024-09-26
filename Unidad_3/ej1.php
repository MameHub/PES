<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>

<?php
// Almacena tres números en variables y escribirlos en pantalla de manera ordenada.

// Variables.
$a = 3;
$b = 7;
$c = 9;

if ($a > $b & $c) {

    if ($b > $c) {

        echo"$a, $b, $c";

    } else {

        echo"$a, $c, $b";

    }

} else if ($b > $a & $c) {

    if ($a > $c) {

        echo"$b, $a, $c";

    } else {

        echo"$b, $c, $a";

    }

} else if ($c > $a & $b) {

    if ($a > $b) {

        echo"$c, $a, $b";

    } else {

        echo"$c, $b, $a";

    }

} else {

    echo "ERROR.";

};

?>

</body>
</html>