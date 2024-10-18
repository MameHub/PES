<?php
// Almacena tres números en variables y escribirlos en pantalla de manera ordenada.

// Variables.
$a = 2;
$b = 3;
$c = 1;
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
if ($a >= $b) {
    if ($a >= $c) {
        if ($b >= $c) {
            echo "$a > $b > $c";
        } else {
            echo "$a > $c > $b";
        }
    } else if ($b >= $c) {
        echo "$c > $b > $a";
    } else {
        echo "$c > $a > $b";
    }
} else if ($b >= $c) {
    if ($c >= $a) {
        echo "$b > $c > $a";
    } else {
        echo "$b > $a > $c";
    }
} else if ($c >= $a) {
    if ($c >= $b) {
        echo "$c > $b > $a";
    }
}
?>

</body>
</html>