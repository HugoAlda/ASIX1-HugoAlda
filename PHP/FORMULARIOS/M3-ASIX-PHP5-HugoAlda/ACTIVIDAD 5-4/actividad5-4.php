<?php

echo "<title>Actividad 5-4</title>";

echo "<u><h1>Actividad 5-4 - Calculadora de IVA dinámica</h1></u>";

echo "<u><h3>Enunciado</h3></u>";

echo "<ol>";

echo "<li>Vuelve a realizar una calculadora de IVA, pero esta vez la cantidad no estará guardada en una variable sino que nos la proporcionará el usuario.</li><br>";

echo "</ol>";

echo "<br><hr><br>";

echo "<u><h3>Ejercicio</h3></u>";

?>

<form method="post" action="./actividad5-4.php">
    <label for="cantidad">Cantidad:</label>
    <input type="text" id="cantidad" name="cantidad" required><br><br>
    <input type="submit" name="submit" value="Calcular">
</form>

<?php
if(isset($_POST['submit'])) {
    $precio = $_POST['cantidad'];
    $porcentajeIVA = 0.21;
    
    //Calculo IVA
    $iva = $precio * $porcentajeIVA;
    
    //Calculo del total con IVA incluido
    $total = $precio + $iva;
    
    echo "<h2>Resultado:</h2>";
    echo "<p>Cantidad sin IVA: $precio €.</p>";
    echo "<p>IVA (21%): $iva €.</p>";
    echo "<p>Total con IVA: $total €.</p>";
}
?>

<br>
<hr>
<br>

<h1><h1></h1></h1>

<h3><u>Menu</u></h3>

<a href="./../ACTIVIDAD 5-3/actividad5-3.php">Actividad 5-3 - Cueva de Gollum</a>
<p>--------</p>
<a href="./../ACTIVIDAD 5-5/actividad5-5.php">Actividad 5-5 - Listado de peliculas</a>

<head>
    <link rel="stylesheet" href="./style.css">
</head>