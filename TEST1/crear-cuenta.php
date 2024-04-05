<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="style.css">

    <title>Creación Cuenta</title>
</head>
<body>
    <div class="contenedor-crear-cuenta">
        <div class="crear-cuenta">
            <br>
            <h3>< <u>Crear Cuenta</u> ></h3>
            <br>
            <form action="connect_bd.php" method="post" class="form-crear-cuenta">
                <label>Nombre: </label><input type="text" name="nombre" required><br><br>
                <label>Primer Apellido: </label><input type="text" name="primer_apellido" required><br><br>
                <label>Segundo Apellido: </label><input type="text" name="segundo_apellido" required><br><br>
                <label>Correo: </label><input type="mail" name="correo" required><br><br>
                <label>Contraseña: </label><input type="password" name="contraseña" required><br><br>
                <input type="submit" name="btn_crear" value="Registrarse">
            </form>
            <br>
            <a href="./index.php">Volver</a>
        </div>
    </div>
</body>
</html>