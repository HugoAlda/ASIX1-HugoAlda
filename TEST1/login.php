<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Inicio de Sessión</title>
</head>
<body>
    <div class="contenedor-login">
        <div class="iniciar-sesion">
            <br>
            <h3>< <u>Iniciar sessión</u> ></h3>
            <br>
            <form action="comprobacion_bd.php" method="post" class="form-iniciar-sesion">
                <label>Correo: </label>
                <input type="mail" name="user" required><br><br>
                <label>Contraseña: </label>
                <input type="password" name="pass" required><br><br>
                <input type="submit" name="btn-login" value="Entrar">
            </form>
            <br>
            <a href="./index.php">Volver</a>
        </div>
    </div>
</body>
</html>