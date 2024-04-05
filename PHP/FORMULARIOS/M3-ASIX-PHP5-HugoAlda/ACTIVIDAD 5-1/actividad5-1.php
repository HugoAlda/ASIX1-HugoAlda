<?php

echo "<title>Actividad 5-1</title>";

echo "<u><h1>Actividad 5-1 - Contacto Fraudulento</h1></u>";

echo "<u><h3>Enunciado</h3></u>";

echo "<ol><li>Di en cada caso si se cumple el condicional.</li></ol>";

echo "<br><hr><br>";

echo "<u><h3 class=titulo2>Ejercicio</h3></u>";

?>

<form id="contactForm" action="./actividad5-1.php" method="POST">
    <label for="nombre">Nombre:</label><br>
    <input type="text" id="nombre" name="nombre" required><br><br>
        
    <label for="telefono">Teléfono:</label><br>
    <input type="tel" id="telefono" name="telefono" required><br><br>
        
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" required><br><br>
        
    <label for="mensaje">Mensaje:</label><br>
    <textarea id="mensaje" name="mensaje" required></textarea><br><br>
        
    <button type="submit" name="btn">Enviar</button>

</form>

<?php

if (isset($_REQUEST['btn'])){
    $nombre = $_POST["nombre"];
    $telefono = $_POST["telefono"];
    $email = $_POST["email"];
    $mensaje = $_POST["mensaje"]; 
    echo "Hola $nombre Te voy a enviar spam a $email y te llamaré por la madrugada al $telefono. Mensaje a enviar: --$mensaje-- Enviado desde mi iPhone.";
}

?>

<br>
<hr>
<br>

<h1><h1></h1></h1>

<h3><u>Menu</u></h3>

<a href="./../ACTIVIDAD 5-2/actividad5-2.php">Actividad 5-2 - ¿Quién saca al perro?</a>

<header>
    <link rel="stylesheet" href="./style.css">
</header>