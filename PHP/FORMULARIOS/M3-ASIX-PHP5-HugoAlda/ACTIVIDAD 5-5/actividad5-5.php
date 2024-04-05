<?php

echo "<title>Actividad 5-5</title>";

echo "<u><h1>Actividad 5-5 - Listado de películas</h1></u>";

echo "<u><h3>Enunciado</h3></u>";

echo "<ol>";

echo "<li>Crea un input y un botón de submit.</li><br>";

echo "<li>Rellena el campo con le nombre de una película.</li><br>";

echo "<li>Cuando se pulse debe guardar el contenido en un array.</li><br>";

echo "<li>Imprime el resultado en una tabla.</li><br>";

echo "</ol>";

echo "<br><hr><br>";

echo "<u><h3>Ejercicio</h3></u>";

//Inicializamos la sesión para poder utilizar variables de sesión, las cuales cuando dicha sesión acabe podremos resetearlas para darle mas usos a la pagina.
session_start();

//Inicializamos el array de películas o lo reiniciamos si existe.
if (!isset($_SESSION['peliculas'])) {
    $_SESSION['peliculas'] = []; //Basicamente el objetivo de esto es reiniciar las palabras del array y vaciarlo para meterle nuevas.
}

//Miramos si se ha enviado el formulario para borrar películas. Una vez clicado al botón de borrar peliculas nos llevara aqui, donde borraremos el contenido del array.
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["borrar_peliculas"])) {
    //Vaciamos el array de películas.
    $_SESSION['peliculas'] = [];
}

//Verificamos si se ha enviado el formulario para agregar una película.
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["pelicula"])) {
    //Obtenemos el nombre de la película enviado por el formulario.
    $nuevaPelicula = $_POST["pelicula"];
    
    //Añadimos la película al array.
    $_SESSION['peliculas'][] = $nuevaPelicula;
}

?>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <label for="pelicula">Nombre de la película:</label>
    <input type="text" id="pelicula" name="pelicula">
    <button type="submit">Guardar</button>
</form>

<?php

//Mostramos la tabla con las películas guardadas.
if (!empty($_SESSION['peliculas'])) {
    echo "<h2>Películas guardadas:</h2>";
    echo "<table border='1'>";
    echo "<tr><th>nº</th><th>Nombre de la película</th></tr>";
    //Aqui iteraremos en orden de ingreso todas las palabras del array y las mostraremos en la tabla, de ahi el foreach y la variable $index.
    //El foreach y la variable $index se compenetran iterando cada nueva palabra añadida al array y la iteran mostrandola en la tabla.
    foreach ($_SESSION['peliculas'] as $index => $pelicula) {
        echo "<tr><td>".($index+1)."</td><td>".$pelicula."</td></tr>";
    }
    echo "</table>";
}

?>

<br>

<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <input type="hidden" name="borrar_peliculas" value="true">
    <button type="submit">Borrar películas</button>
</form>

<br>
<hr>
<br>

<h1><h1></h1></h1>

<h3><u>Menu</u></h3>

<a href="./../ACTIVIDAD 5-4/actividad5-4.php">Actividad 5-4 - Calculadora de IVA dinámica</a>
<p>--------</p>
<a href="./../ACTIVIDAD 5-6/actividad5-6.php">Actividad 5-6 - Listado de películas</a>

<head>
    <link rel="stylesheet" href="./style.css">
</head>