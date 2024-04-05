<?php

echo "<title>Actividad 5-7</title>";

echo "<u><h1>Actividad 5-7 - Montaña rusa</h1></u>";

echo "<u><h3>Enunciado</h3></u>";

echo "<p>Para entrar en la atracción vamos a construir un validador que minimice las víctimas mortales. Para ello aplicaremos varios requisitos:</p>";

echo "<ul>";

echo "<li>Debe superar una altura de 120cm.</li><br>";

echo "<li>Debe tener una edad superior a 16 años.</li><br>";

echo "<li>¿Rechaza llevarnos a juicio por daños y perjuicios de un mal mantenimiento?</li><br>";

echo "</ul>";

echo "<p>En caso de ser todo válido le daremos el ticket.</p>";

echo "<ul>";

echo "<li>Genera un ticket con su nombre y un número único. Ejemplo: “Alfonso, ticket 00034”.</li><br>";

echo "</ul>";

echo "<br><hr><br>";

echo "<u><h3>Ejercicio</h3></u>";

//Definimos las variables de entrada.
$nombre = $_POST['nombre'] ?? null; //Nombre de la persona.
$altura = $_POST['altura'] ?? null; //Altura en cm.
$edad = $_POST['edad'] ?? null; //Edad en años.
$juicio = $_POST['juicio'] ?? null; //¿Está dispuesto a llevarnos a juicio por daños y perjuicios?.

//Mensaje por defecto
$mensaje = "";

//Verificamos si se ha enviado el formulario.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //Verificamos si cumple con los requisitos.
    if ($nombre && $altura > 120 && $edad > 16 && $juicio !== null) {
        //Generamos un número único para el ticket
        $numeroTicket = rand(1, 99999);

        //Generamos el ticket con el nombre de la persona.
        $ticket = "$nombre, ticket $numeroTicket";

        //Mostramos el ticket generado aleatoriamente.
        $mensaje = "¡Felicidades, $nombre! Puedes entrar en la atracción. Aquí está tu ticket: $ticket.";
    } else {
        $mensaje = "Lo siento, no cumples con los requisitos para entrar en la atracción.";
    }
}

?>

<h3>Validador de atracción</h3>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre" required>
    <br><br>
    <label for="altura">Altura (en cm):</label>
    <input type="number" id="altura" name="altura" required>
    <br><br>
    <label for="edad">Edad:</label>
    <input type="number" id="edad" name="edad" required>
    <br><br>
    <label for="juicio">¿Está dispuesto a llevarnos a juicio por daños y perjuicios?</label>
    <select id="juicio" name="juicio" required>
        <option value="si">Sí</option>
        <option value="no">No</option>
    </select>
    <br><br>
    <button type="submit">Validar</button>
</form>

<?php if ($mensaje): ?>
    <p><?php echo $mensaje; ?></p>
<?php endif; ?>

<br>
<hr>
<br>

<h1><h1></h1></h1>

<h3><u>Menu</u></h3>

<a href="./../ACTIVIDAD 5-6/actividad5-6.php">Actividad 5-6 - Notas de los alumnos</a>
<p>--------</p>
<a href="./../ACTIVIDAD 5-8/actividad5-8.php">Actividad 5-8 - Formulario de padre</a>

<head>
    <link rel="stylesheet" href="./style.css">
</head>