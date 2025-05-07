<?php

# Iniciamos la sesion.
session_start();

if (isset($_POST['enviar'])) {
    if (isset($_POST['user']) && isset($_POST['pass'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        if ($user == "admin" && $pass == "admin") {
            $_SESSION['user'] = $user;
            $_SESSION['pass'] = $pass;

            header("Location: index.php");
            exit();
        }
        
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/style.css">
    <title>Log In</title>
</head>
<body>
    <div class="login">
        <form action="" method="post">
            <!-- <div class="user"> -->
                <label for="user">Usuario:</label>
                <input type="text" name="user" placeholder="Usuario">
            <!-- </div>
            <div class="pass"> -->
                <label for="pass">Contraseña:</label>
                <input type="password" name="pass" placeholder="Contraseña">
            <!-- </div> -->
            <button type="submit" name="enviar">Acceder</button>
        </form>
    </div>
</body>
</html>