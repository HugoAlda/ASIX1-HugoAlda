<?php

echo "<title>Actividad 3-4</title>";

echo "<u><h1>Actividad 3-4 - Fecha de nacimiento</h1></u>";

echo "<u><h3>Enunciado</h3></u>";

echo "<ol><li>Crea un select para pedir el <strong>dia de nacimiento: 1 al 31</strong> --> <i>Usa un</i> <strong>foreach</strong>.</li><br><li>A su otro lado select para pedir el <strong>mes de nacimiento: 1 al 12</strong> --> <i>Usa un</i> <strong>for</strong>.</li><br><li>Y a continuación otro select para pedir el <strong>año de nacimiento: 1900 al año actual</strong> --> <i>Usa un</i> <strong>while</strong>.</li><br></ol>";

echo "<hr><br>";

?>

<header>
    <link rel="stylesheet" href="./style.css">
</header>
<br>
<form>
    <label for="dia"><strong>Día de Nacimiento:</strong></label>
    <select>
    <?php
    //foreach para los días del 1 al 31.
    foreach (range(1, 31) as $dia) {
      echo "<option value=\"$dia\">$dia</option>";
    }
    ?>
    </select>

    <label for="mes"><strong>Mes de Nacimiento:</strong></label>
    <select>
    <?php
        //for para los meses del 1 al 12.
        for ($mes = 1; $mes <= 12; $mes++) {
            echo "<option value=\"$mes\">$mes</option>";
        }
    ?>
    </select>

    <label for="ano"><strong>Año de Nacimiento:</strong></label>
    <select>
    <?php
        //while para los años, del 1900 al año actual (2024).
        $añoActual = date("Y");
        $año = 1900;
        while ($año <= $añoActual) {
            echo "<option value=\"$año\">$año</option>";
            $año++;
        }
    ?>
    </select>
</form>
<br><hr>