<?php

    echo "<title>Actividad 2-4</title>";

    echo "<u><h1>Actividad 2-4 - Censo de población</h1></u>";

    echo "<u><h3>Enunciado</h3></u>";

    echo "<ol><li>Crea un diccionario con el censo de población de: España, Portugal, Francia, Italia y Grecia. Ayúdate de Wikipedia.</li><br><li>Ordena de mayor a menor. <strong>¡Pista! <i>asort</i></strong> hara el trabajo por ti.</li><br><li>Imprime con <strong>var_dump</strong>.</li><br></ol>";

    echo "<u><h3>Ejercicio</h3></u>";

    //Array con los nombres de los paises y su censo correspondiente.
    $censo = [
        'España' => 48446594,
        'Portugal' => 10467366,
        'Francia' => 68521974,
        'Italia' => 58800000,
        'Grecia' => 10394055,
    ];

    //Ordena de mayor a menor segun el censo de los paises.
    arsort($censo, SORT_DESC);

    //Imprime con var_dump el array del censo de los paises.
    var_dump($censo);

?>

<head>
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>