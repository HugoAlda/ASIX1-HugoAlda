<?php

echo "<title>Actividad 5-2</title>";

echo "<u><h1>Actividad 5-2 - ¿Quién saca al perro?</h1></u>";

echo "<u><h3>Enunciado</h3></u>";

echo "<ol>";

echo "<li>Escribe en un <strong>textarea</strong> una lista de nombres.</li><br>";

echo "<li>Cuando pulses un botón debes mostrar un nombre aleatorio. (Será el encargado de sacar al perro).</li><br>";

echo "<li>Muestra con la siguiente plantilla: <strong>nombre</strong> saca al perro.</li><br>";

echo "</ol>";

echo "<u><h3>Ejemplo en <strong>textarea</strong>:</h3></u>";

echo "<ul>";

echo "<li><i>Batman, Superman, Ironman, Pescanova</i></li><br>";

echo "<li><i>//Cuando es pulsado el botón...</i></li><br>";

echo "<li><i><strong>Ironman</strong> saca al perro.</i></li><br>";

echo "</ul>";

echo "<hr><br>";

echo "<u><h3>Ejercicio</h3></u>";

?>

<form method="post">
    <label for="nombres">Lista de Nombres:</label><br>
    <textarea id="nombres" name="nombres" rows="4" cols="50">Batman, Superman, Ironman, Pescanova</textarea><br>
    <input type="submit" name="submit" value="Seleccionar Aleatoriamente">
</form>

<?php
    if(isset($_POST['submit'])) {
        $nombres = ["Batman","Superman","Ironman","Pescanova"];
        $nombre_aleatorio = trim($nombres[array_rand($nombres)]);
        echo "<p>$nombre_aleatorio saca al perro.</p>";
    }
?>

<br>
<hr>
<br>

<h1><h1></h1></h1>

<h3><u>Menu</u></h3>

<a href="./../ACTIVIDAD 5-1/actividad5-1.php">Actividad 5-1 - Contacto Fraudulento</a>
<p>--------</p>
<a href="./../ACTIVIDAD 5-3/actividad5-3.php">Actividad 5-3 - Cueva de Gollum</a>

<head>
    <link rel="stylesheet" href="./style.css">
</head>