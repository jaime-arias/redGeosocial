<?php
require 'conexion.php'
?>

<doctype <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Registrarse</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Registrarse</h1> <span><a href="login.php">...o iniciar sesión :)</a></span>
    <form action="login.php" method="post">
    <input type="text" name="email" placeholder="Ingresa tu email"> <br>
    <input type="text" name="pass" placeholder="Ingresa tu contraseña"> <br>
    <input type="text" name="pass" placeholder="Confirma tu contraseña"> <br>
    <input type="submit" value="enviar">
</body>
</html>