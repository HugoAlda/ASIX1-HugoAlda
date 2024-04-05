<?php

    echo "<title>Actividad 2-2</title>";

    echo "<u><h1>Actividad 2-2 - Agenda</h1></u>";

    echo "<u><h3>Enunciado</h3></u>";

    echo "<ol><li>Crea un <strong>array</strong> con el nombre <strong>agenda</strong>.</li><br><li>Añade 2 citas (frases): ''Dentista a las 12h'' y otra la que tú quieras.</li><br><li>Imprime con <strong>var_dump</strong>.</li><br><li>Te ha surgido un problema: Modifica la cita del Dentista a las 16h.</li><br><li>Imprime con <strong>var_dump</strong>.</li><br><li>Al final se te ha liado el día: Borra la cita con el Dentista.</li><br><li>Imprime con <strong>var_dump</strong>.</li><br><li>En lugar del <strong>var_dump</strong>, crea una <strong>lista desordenada (ul). ¡Pista! join()</strong></li></ol>";

    echo "<u><h3>Ejercicios</h3></u>";

    //Crea un array con el nombre agenda.
    $agenda = array();

    //Añade 2 frases
    $agenda[] = "Dentista a las 12h";
    $agenda[] = "Reunión de trabajo a las 15h";

    //Imprime con var_dump la agenda.
    echo "<br><strong>Array inicial: </strong><br><br>";
    var_dump($agenda);

    //Modifica la cita del Dentista a las 16h.
    $agenda[0] = "Dentista a las 16h<br>";

    //Imprime con var_dump la agenda actualizada.
    echo "<br><br><strong>Array después de modificar la cita del Dentista: </strong><br><br";
    var_dump($agenda);

    //Borra la cita con el Dentista.
    unset($agenda[0]);

    //Imprime con var_dump la agenda actualizada.
    echo "<br><br><strong>Array después de borrar la cita del Dentista: </strong><br><br>";
    var_dump($agenda);

    //Crear una lista desordenada (ul).
    echo "<br><strong><br>Lista desordenada:<br></strong>";
    //La funcion join permite de momento o solo sabemos que podemos añadir arrays dentro de elementos de html.
    echo "<ul><li>" . join("</li><li>", $agenda) . "</li></ul>";

?>

<head>
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>