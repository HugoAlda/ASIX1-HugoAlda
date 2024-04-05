<?php

echo "<title>Actividad 4-2</title>";

echo "<u><h1>Actividad 4-2 - Portero de discoteca automático</h1></u>";

echo "<u><h3>Enunciado</h3></u>";

echo "<ol>";

echo "<li>Guarda en una variable un año de nacimiento e imprímelo.</li><br>";

echo "<li>Calcula la edad e imprímela.</li><br>";

echo "<li><strong>Pista: Date('Y')</strong> obtiene el año actual.</li><br>";

echo "<li>Si es mayor de edad, imprime que puede pasar dentro.</li><br>";

echo "<li>Si tiene más de 65 años, imprime que es demasiado mayor para entrar.</li><br>";

echo "<li>Obtén el año del sistema, escríbelo en una variable e imprímelo.</li><br>";

echo "<li><strong>Pista: date('d')</strong> obtiene el día del mes actual, <strong>date('m')</strong> el mes actual y <strong>date('Y')</strong> ek año actual.</li><br>";

echo "<li>Guarda además el día y el mes de nacimiento en otras dos variables, imprímelas y calcula si ha cumplido el año actual e imprímelo.</li><br>";

echo "</ol>";

echo "<hr><br>";

echo "<u><h3>Ejercicio</h3></u>";

?>

<form action="./actividad4-2.php" method="get">
    <label for="año">Año: </label>
    <input type="text" name="año">
    <button type="submit">Enviar</button>
</form>

<?php

//Año de nacimiento.
$año_nacimiento = 1990;

//Imprimir año de nacimiento.
echo "Año de nacimiento: $año_nacimiento.";

echo "<br><br>";

//Calcular la edad.
$año_actual = date('Y');
$edad = $año_actual - $año_nacimiento;

//Imprimir la edad.
echo "Edad: $edad años.";

//Si es mayor de edad.
if ($edad >= 18) {
    echo " Puede pasar dentro.";
}

echo "<br><br>";

//Si tiene más de 65 años.
if ($edad > 65) {
    echo "Es demasiado mayor para entrar.";
}

//Asignacion de día y el mes de nacimiento.
$dia_nacimiento = 15;
$mes_nacimiento = 5;

//Día y mes de nacimiento.
echo "Día de nacimiento: $dia_nacimiento.";

echo "<br><br>";

echo "Mes de nacimiento: $mes_nacimiento.";

echo "<br><br>";

//Calculo si ha cumplido años este año.
$ha_cumplido_añio = ($mes_nacimiento < date('m')) || ($mes_nacimiento == date('m') && $dia_nacimiento <= date('d'));

if ($ha_cumplido_añio) {
    echo "Ya ha cumplido años en el año actual.";
} else {
    echo "Todavía no ha cumplido años en el año actual.";
}

?>

<head>
    <link rel="stylesheet" href="./style.css">
</head>