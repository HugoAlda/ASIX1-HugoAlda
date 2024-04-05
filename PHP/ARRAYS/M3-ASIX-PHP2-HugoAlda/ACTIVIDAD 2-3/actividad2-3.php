<?php

    echo "<title>Actividad 2-3</title>";

    echo "<u><h1>Actividad 2-3 - Concurso de microrelatos</h1></u><br>";

    echo "<u><h3>Enunciado</h3></u>";

    echo "<ol><li>Se ha convocado un concurso de microrrelatos sobre sillones incómodos. El límite de palabras para ser enviadas son de 10.</li><br><li>Crea una variable con el micro relato.</li><br><li>Muestra el número de palabras usando <strong>preg_split</strong> y <strong>count</strong>.</li><br></ol>";

    echo "<u><h3>Ejercicio</h3></u>";

    //Microrrelato sobre sillones incómodos.
    $microrrelato = "En el viejo sillón, se sentia un abrazo muy cómodo.";

    //Contador de palabras usando preg_split y count.
    $palabras = preg_split('/\s+/', $microrrelato);
    $numPalabras = count($palabras);

    //Imprime el microrrelato.
    echo "<strong>Microrrelato:</strong> $microrrelato ";

    //Imprime el contador de palabras.
    echo "<strong>Número de palabras:</strong> <i>$numPalabras</i>";

?>

<head>
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>