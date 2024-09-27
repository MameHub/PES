<?php
// Almacena tres números en variables y escribirlos en pantalla de manera ordenada.

// Variables.
$a = 1;
$b = 2;
$c = 3;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>
<body>

<?php
if ($a > $b) {

    if ($a > $c) {

        echo"$a, $b, $c";

    } else {

        echo"$a, $c, $b";

    }

} else if ($b > $a) {

    if ($b > $c) {

        echo"$b, $a, $c";

    } else {

        echo"$b, $a, $b";

    }

} else if ($c > $a) {

    if ($c > $b) {

        echo"$c, $b, $c";

    } else {

        echo"$a, $c, $b";

    }

} else {

    echo "ERROR.";

};
?>

</body>
</html>