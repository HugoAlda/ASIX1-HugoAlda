<head>
    <link rel="stylesheet" href="style.css">
    <title>Actividad 5-8</title>
</head>

<u><h1>Actividad 5-8 - Formulario de Padre</h1></u>

<?php

echo "<u><h3>Enunciado</h3></u>";

echo "<ol>";

    echo "<li>Pidele el nombre.</li><br>";

    echo "<li>Pidele el sexo.</li><br>";

    echo "<li>Pidele el número de hijos.</li><br>";

    echo "<li>Muestra la siguiente frase dependiendo de los datos anteriores:</li><br>";

echo "</ol>";

echo "<ul>";

    echo "<li>El señor Pepe tiene 1 hijo.</li><br>";

    echo "<li>El señor Pepe tiene 4 hijos.</li><br>";

    echo "<li>La señora Sonia tiene 1 hija.</li><br>";

    echo "<li>La señora Sonia no tiene hijos.</li><br>";

echo "</ul>";

?>

<h2><u>Ejercicio</u></h2>

<h3>Calculadora de hijos</h3>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>
    <br><br>
    <label for="sexo">Sexo:</label>
    <select id="sexo" name="sexo" required>
        <option value="masculino">Masculino</option>
        <option value="femenino">Femenino</option>
    </select>
    <br><br>
    <label for="num_hijos">Número de hijos:</label>
    <input type="number" id="num_hijos" name="num_hijos" required>
    <br><br>
    <button type="submit">Calcular</button>
</form>

<?php

//Verificamos si se ha enviado el formulario.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
//Obtenemos los datos del formulario.
$nombre = $_POST["nombre"];
$sexo = $_POST["sexo"];
$num_hijos = $_POST["num_hijos"];

//Construimos la frase según los datos proporcionados.
if ($sexo == "masculino") {
    if ($num_hijos == 1) {
        echo "El señor $nombre tiene 1 hijo.";
    } else {
        echo "El señor $nombre tiene $num_hijos hijos.";
    }
} else {
    if ($num_hijos == 1) {
        echo "La señora $nombre tiene 1 hijo.";
    } else {
        echo "La señora $nombre no tiene hijos.";
    }
}
}

?>

<br>
<hr>
<br>

<h3><u>Menu</u></h3>

<a href="./../ACTIVIDAD 5-7/actividad5-7.php">Actividad 5-7 - Montaña Rusa</a>