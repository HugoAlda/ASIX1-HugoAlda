<?php

echo "<title>Actividad 5-6</title>";

echo "<u><h1>Actividad 5-6 - Notas de los alumnos</h1></u>";

echo "<u><h3>Enunciado</h3></u>";

echo "<ol>";

echo "<li>Crea un array con unos alumnos y sus respectivas notas. Marta: 7,8 Luis: 5 Lorena: 6,9 …</li><br>";

echo "<li>Muestra las notas de una forma ordenada.</li><br>";

echo "<li>Da la posibilidad de añadir nuevos alumnos.</li><br>";

echo "<li>Muestra la media en la parte inferior.</li><br>";

echo "</ol>";

echo "<br><hr><br>";

echo "<u><h3>Ejercicio</h3></u>";

//Inicializamos la sesión para poder utilizar variables de sesión.
session_start();

//Inicializamos los arrays de alumnos y notas o los reiniciamos si existen.
if (!isset($_SESSION['alumnos'])) {
    $_SESSION['alumnos'] = [];
}

if (!isset($_SESSION['notas'])) {
    $_SESSION['notas'] = [];
}

//Verificamos si se ha enviado el formulario para borrar alumnos o notas.
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST["borrar_alumnos"])) {
        //Vaciamos el array de alumnos.
        $_SESSION['alumnos'] = [];
    }
    if (isset($_POST["borrar_notas"])) {
        //Vaciamos el array de notas.
        $_SESSION['notas'] = [];
    }
}

//Verificamos si se ha enviado el formulario para agregar un alumno y su nota.
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["alumno"]) && isset($_POST["nota"])) {
    // Obtenemos el nombre del alumno y su nota enviados por el formulario
    $nuevoAlumno = $_POST["alumno"];
    $nuevaNota = $_POST["nota"];
    
    //Añadimos el alumno y su nota a los arrays respectivos.
    $_SESSION['alumnos'][] = $nuevoAlumno;
    $_SESSION['notas'][] = $nuevaNota;
}

?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="alumno">Nombre del alumno:</label>
    <input type="text" id="alumno" name="alumno">
    <br><br>
    <label for="nota">Nota del alumno:</label>
    <input type="text" id="nota" name="nota">
    <br><br>
    <button type="submit">Guardar</button>
</form>

<?php

//Mostramos la tabla con los alumnos y sus respectivas notas.
if (!empty($_SESSION['alumnos']) && !empty($_SESSION['notas'])) {
    echo "<h2>Notas de los alumnos:</h2>";
    echo "<table border='1'>";
    echo "<tr><th>#</th><th>Nombre del alumno</th><th>Nota</th></tr>";
    //Iteramos sobre ambos arrays simultáneamente para mostrar el nombre del alumno y su nota en la misma fila de la tabla.
    foreach ($_SESSION['alumnos'] as $index => $alumno) {
        echo "<tr><td>".($index+1)."</td><td>".$alumno."</td><td>".$_SESSION['notas'][$index]."</td></tr>";
    }
    echo "</table>";

    //Calcular la media de las notas
    $numAlumnos = count($_SESSION['alumnos']);
    $sumaNotas = array_sum($_SESSION['notas']);
    $media = $sumaNotas / $numAlumnos;
    echo "<br><strong>Media de las notas:</strong> $media";
}

?>

<br><br>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="hidden" name="borrar_alumnos" value="true">
    <input type="hidden" name="borrar_notas" value="true">
    <button type="submit">Borrar alumnos y notas</button>
</form>

<br>
<hr>
<br>

<h1><h1></h1></h1>

<h3><u>Menu</u></h3>

<a href="./../ACTIVIDAD 5-5/actividad5-5.php">Actividad 5-5 - Listado de películas</a>
<p>--------</p>
<a href="./../ACTIVIDAD 5-7/actividad5-7.php">Actividad 5-7 - Montaña Rusa</a>

<head>
    <link rel="stylesheet" href="./style.css">
</head>