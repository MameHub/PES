<?php

# Comprobamos que se ha recibido el genero mediante el método GET.
if (isset($_GET['genero'])) {
    
    # Almacenamos dicho genero en una variable.
    $generoSeleccionado = $_GET['genero'];
    
    # Creamos la cookie con dicho genero durante una hora.
    setcookie("genero_seleccionado", $generoSeleccionado, time() + 3600);
    
    # Redirigimos a "index.php" y finalizamos la ejecución de este script.
    header("Location: index.php");
    exit();

}

?>