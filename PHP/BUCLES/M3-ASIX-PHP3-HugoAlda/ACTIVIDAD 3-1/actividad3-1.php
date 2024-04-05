<?php

echo "<title>Actividad 3-1</title>";

echo "<u><h1>Actividad 3-1 - Lista de peliculas</h1></u>";

echo "<u><h3>Enunciado</h3></u>";

echo "<ol><li>Guarda en un array tus <strong>6 películas favoritas</strong>.</li><br><li>Imprime en párrafos con el siguiente formato: <i>'Pelicula 3: Los Vengadores', añadiendo la posición de la pelicula [i+1]</i>.</li><br><li>Imprime en lugar de párrafos... <strong>¡una tabla!</strong></li><br><li>Añade un poco de <strong>CSS</strong> para mejorar el diseño. Cada título debe tener un color aleatorio. <strong>¡Pista!:</strong> <i>random_int(0, 255).</i></li></ol>";

echo "<hr>";

//Array de las películas.
$peliculasFavoritas = array(
  "Star Wars",
  "Dune",
  "Star Trek",
  "El Señor de los Anillos",
  "El Hobbit",
  "Gru: Mi Villano Favorito"
);

//Imprimir en párrafos las peliculas ordenadas como pide en el enunciado.
foreach ($peliculasFavoritas as $i => $pelicula) {
  echo "<p><strong>Película " . ($i + 1) . "</strong>" . ": <i>" . $pelicula . "." . "</i></p>";
}

echo "<hr>";

// Imprimir en una tabla.
echo "<table>";
echo "<tr><th>nº</th><th>Título</th></tr>";

foreach ($peliculasFavoritas as $i => $pelicula) {
  echo "<tr><td>" . ($i + 1) . "</td><td style='color:rgb(".random_int(0, 255).", ".random_int(0, 255).", ".random_int(0, 255).")'>" . $pelicula . "</td></tr>";
}

echo "</table>";
?>

<head>
  <link rel="stylesheet" href="./style.css">
</head>