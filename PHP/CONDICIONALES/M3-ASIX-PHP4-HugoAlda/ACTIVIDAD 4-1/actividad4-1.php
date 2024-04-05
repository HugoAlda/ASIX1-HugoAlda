<?php

echo "<title>Actividad 4-1</title>";

echo "<u><h1>Actividad 4-1 - Condicionales</h1></u>";

echo "<u><h3>Enunciado</h3></u>";

echo "<ol><li>Di en cada caso si se cumple el condicional.</li></ol>";

echo "<br><hr><br>";

echo "<u><h3>Ejercicio</h3></u>";

echo "Di en cada caso si se cumple el condicional:<br>";

echo "<ol>";

echo "<li>if (True && True)</li><br>";

echo "<p class=verdadero>Se cumple</p><br>";

echo "<li>if (False && True)</li><br>";

echo "<p class=falso>No se cumple</p><br>";

echo "<li>if (1 == 1 && 2 == 1)</li><br>";

echo "<p class=falso>No se cumple</p><br>";

echo "<li>if (test == test)</li><br>";

echo "<p class=verdadero>Se cumple</p><br>";

echo "<li>if (1 == 1 || 2 != 1)</li><br>";

echo "<p class=verdadero>Se cumple</p><br>";

echo "<li>if (True && 1 == 1)</li><br>";

echo "<p class=verdadero>Se cumple</p><br>";

echo "<li>if (False && 0 != 0)</li><br>";

echo "<p class=falso>No se cumple</p><br>";

echo "<li>if (True || 1 == 1)</li><br>";

echo "<p class=verdadero>Se cumple</p><br>";

echo "<li>if (test == testing)</li><br>";

echo "<p class=falso>No se cumple</p><br>";

echo "<li>if (1 != 0 && 2 == 1)</li><br>";

echo "<p class=falso>No se cumple</p><br>";

echo "<li>if (test != testing)</li><br>";

echo "<p class=falso>No se cumple</p><br>";

echo "<li>if (test == 1)</li><br>";

echo "<p class=falso>No se cumple</p><br>";

echo "<li>if (!(True && False))</li><br>";

echo "<p class=verdadero>Se cumple</p><br>";

echo "<li>if (!(1 == 1 && 0 != 1))</li><br>";

echo "<p class=falso>No se cumple</p><br>";

echo "<li>if (!(10 == 1 || 1000 == 1000))</li><br>";

echo "<p class=falso>No se cumple</p><br>";

echo "<li>if (!(1 != 10 || 3 == 4))</li><br>";

echo "<p class=falso>No se cumple</p><br>";

echo "<li>if (!(testing == testing && Zed == Cool Guy))</li><br>";

echo "<p class=verdadero>Se cumple</p><br>";

echo "<li>if (1 == 1 && (!(testing == 1 || 1 == 0)))</li><br>";

echo "<p class=verdadero>Se cumple</p><br>";

echo "<li>if (chunky == bacon && (!(3 == 4 || 3 == 3)))</li><br>";

echo "<p class=falso>No se cumple</p><br>";

echo "<li>if (3 == 3 && (!(testing == testing || PHP == Fun)))</li><br>";

echo "<p class=verdadero>Se cumple</p><br>";

echo "</ol>";

?>

<head>
    <link rel="stylesheet" href="./style.css">
</head>