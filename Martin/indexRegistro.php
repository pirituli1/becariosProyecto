<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro</title>
    <link rel= "stylesheet" href="styleRegistro.css">
</head>
<body>
    <form method="post">
        <h2>Hola</h2>
        <p>Inicia tu registro</p>
        <div class="input-wrapper">
            <input type="text" name="Name" placeholder="Nombre">
        </div>

        <div class="input-wrapper">
            <input type="email" name="email" placeholder="Email">
        </div>

        <div class="input-wrapper">
            <input type="text" name="direction" placeholder="Direccion">
        </div>

        <div class="input-wrapper">
            <input type="tel" name="phone" placeholder="Telefono">
        </div>

        <div class="input-wrapper">
            <input type="password" name="password" placeholder="Contraseña">
        </div>

        <input class="btn" type="submit" name="registro" value="Enviar">
    </form>
    <?php
    include ("registro.php");
    ?>
</body>
</html>