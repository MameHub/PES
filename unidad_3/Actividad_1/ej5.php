<?php
/*
Script que muestre una lista de enlaces en función del perfil de usuario:
    Perfil Administrador: Pagina1, Pagina2, Pagina3, Pagina4
    Perfil Usuario: Pagina1, Pagina2
*/
$profile = "user";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 5</title>
</head>
<body>
    <p>
    Script que muestre una lista de enlaces en función del perfil de usuario:
        Perfil Administrador: Pagina1, Pagina2, Pagina3, Pagina4
        Perfil Usuario: Pagina1, Pagina2
    </p>
<?php
if ($profile == "admin") {
    echo "<a>Página 1</a>";
    echo "<br/>";
    echo "<a>Página 2</a>";
    echo "<br/>";
    echo "<a>Página 3</a>";
    echo "<br/>";
    echo "<a>Página 4</a>";
} else {
    echo "<a>Página 1</a>";
    echo "<br/>";
    echo "<a>Página 2</a>";
} 

?>
</body>
</html>