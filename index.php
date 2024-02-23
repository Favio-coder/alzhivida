<?php

 

?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>AlzhiVida</title>
<link rel="stylesheet" href="./styles/index.css">
</head>
<body>

<div class="container">
    <div class="main-logo">
        <img src="./assets/logo_alzhivida.png" alt="logo-alzhivida">
    </div>
    <h2>¡Bienvenido a AlzhiVida!</h2>
    <h3>Para empezar a usar AlzhiVida inicia sesión o crea una cuenta</h3>
    <hr class="linea">
    <form action="procesar_login.php" method="post">
        <p class="text-input">Usuario:</p>
        <div class="box-input">
            <input type="text" id="usuario" name="usuario" placeholder="Usuario" required>
        </div>
        <p class="text-input">Contraseña:</p>
        <div class="box-input">
            <input type="password" id="contraseña" name="contrasena" placeholder="Contraseña" required>
            <img src="./assets/icon-eye-01.svg" alt="Mostrar contraseña" class="icon-eye-1" style=" display:block" height="25" width="25">
            <img src="./assets/icon-eye-two.svg" alt="Ocultar contraseña" class="icon-eye-2" style=" display:none" height="25" width="25">
        </div>
        <div class="secciones-botones-entrar">
            <input type="submit" value="Iniciar sesión">
            <input type="submit" value="Crear cuenta" onclick="redireccionarCuenta()">
        </div>

    
    </form>
</div>

<script src="./JS/index.js"></script>

</body>
</html>



