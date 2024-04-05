<?php

echo "<title>Actividad 5-3</title>";

echo "<u><h1>Actividad 5-3 - Cueva de Gollum</h1></u>";

echo "<u><h3>Enunciado</h3></u>";

echo "<ol>";

echo "<li>Muestra una adivinanza.</li><br>";

echo "<li>En un input, pide la respuesta.</li><br>";

echo "<li>Añade un botón de submit.</li><br>";

echo "<li>Si se pulsa el botón debes comprobar si has acertado. La respuesta es: Tiempo.</li><br>";

echo "<li>Si acierta felicítalo.</li><br>";

echo "<li>Si pierde, muestra la respuesta y cómetelo.</li><br>";

echo "</ol>";

echo "<br><hr><br>";

echo "<u><h3>Ejercicio</h3></u>";

?>

<form method="post" action="./actividad5-3.php">
    <h4>Adivinanza</h4>
    <p>Esta cosa se devora a todas las cosas;<br>Pájaros, bestias, árboles, flores;<br>Carcome el hierro, muerde el acero;<br>Muele duras piedras y las reduce a harina;<br>Mata al rey, arruina la ciudad,<br>Y derriba a la montaña.<br></p>
    <input type="text" id="respuesta" name="respuesta"><br><br>
    <input type="submit" name="submit" value="Comprobar">
</form>

<?php
if(isset($_POST['submit'])) {
    $respuesta = $_POST['respuesta'];
    if($respuesta == 'tiempo') {
        echo "<h2>¡Has Acertado!</h2>";
    } else {
        echo "<h2>¡Has Fallado! La respuesta correcta es: Tiempo.</h2>";
    }
}
?>

<br>
<hr>
<br>

<h1><h1></h1></h1>

<h3><u>Menu</u></h3>

<a href="./../ACTIVIDAD 5-2/actividad5-2.php">Actividad 5-2 - ¿Quién saca al perro?</a>
<p>--------</p>
<a href="./../ACTIVIDAD 5-4/actividad5-4.php">Actividad 5-4 - Calculadora de IVA dinámica</a>

<head>
    <link rel="stylesheet" href="./style.css">
</head>