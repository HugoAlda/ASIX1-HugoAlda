<?php

echo "<title>Actividad 3-2</title>";

echo "<u><h1>Actividad 3-2 - Jugando con bucles</h1></u>";

echo "<u><h3>Enunciado</h3></u>";

echo "<ol><li>Imprime los números del <strong>1 al 10</strong>.</li><br><li>Imprime los números del <strong>60 al 70</strong>.</i></li><br><li>Imprime los números del <strong>20 al 1</strong>.</li><br><li>Imprime los números del <strong>1 al 1000</strong>.</li><br><li>Imprime la <strong>tabla del 5</strong>.</li><br><li>Imprime la <strong>tabla del 5</strong> <i>con este formato: 5 x 3 = 15</i>.</li><br><li>Suma los números del <strong>1 al 100</strong>.</li></ol>";

echo "<hr>";

echo "<br>";

//Imprimir números del 1 al 10.
echo "<strong>Números del 1 al 10:</strong> ";
echo "<i>";
for ($i = 1; $i <= 10; $i++) {
  echo $i . "-";
}
echo ".</i>";

echo "<br><br><hr><br>";

//Imprimir números de 60 al 70.
echo "<strong>Números de 60 al 70:</strong> ";
echo "<i>";
for ($i = 60; $i <= 70; $i++) {
  echo $i . "-";
}
echo ".</i>";

echo "<br><br><hr><br>";

//Imprimir números del 20 al 1.
echo "<strong>Números del 20 al 1:</strong> ";
echo "<i>";
for ($i = 20; $i >= 1; $i--) {
  echo $i . "-";
}
echo ".</i>";

echo "<br><br><hr><br>";

//Imprimir números del 1 al 1000.
echo "<strong>Números del 1 al 1000:</strong> ";
echo "<i>";
for ($i = 1; $i <= 1000; $i++) {
  echo $i . "-";
}
echo ".</i>";

echo "<br><br><hr><br>";

//Imprimir la tabla del 5.
echo "<u><strong>Tabla del 5:</strong></u><br><br>";
echo "<i>";
for ($i = 1; $i <= 10; $i++) {
  echo (5 * $i) . ".<br>";
}
echo "</i>";

echo "<br><hr><br>";

//Imprimir la tabla del 5 con el formato específico.
echo "<strong><u>Tabla del 5 con formato específico:</strong></u><br><br>";
echo "<i>";
for ($i = 1; $i <= 10; $i++) {
  echo "5 x " . $i . " = " . (5 * $i) . ".<br>";
}
echo "</i>";

echo "<br><hr><br>";

//Sumar números del 1 al 100.
$suma = 0;
for ($i = 1; $i <= 100; $i++) {
  $suma += $i;
}

echo "<i>La suma de los números del 1 al 100 es:</i> <strong>$suma</strong>.";

echo "<br><br><hr>";

?>

<head>
    <link rel="stylesheet" href="./style.css">
</head>