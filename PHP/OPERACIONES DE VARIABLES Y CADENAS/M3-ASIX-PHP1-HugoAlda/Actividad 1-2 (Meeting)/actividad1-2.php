<?php

    echo "<title>Actividad 1-2</title>";

    echo "<h1><u>Actividad 1-2 - Meeting</u></h1>";
    
    //Le asignamos el nombre de Sara a la variable $chica.
    $chica = "Sara";

    //Le asignamos el nombre de Pol a la variale $chico.
    $chico = "Pol";

    //Le asignamos el año de nacimiento de la chicha a la variable $añochica.
    $año_chica = 2002;

    //Le asignamos el año de nacimiento del chico a la variable $añochico.
    $año_chico = 2004;

    //Le asignamos el año en el que estamos a la variable $año.
    $año = 2024;

    //A la variable $edad_chica le haremos una resta de años involucrando las variables $año y $añochica para así saber la edad de la chica.
    $edad_chica = $año - $año_chica;

    //A la variable $edad_chico le haremos una resta de años involucrando las variables $año y $añochico para así saber la edad del chico.
    $edad_chico = $año - $año_chico;

    echo "<h3><u>Declaración amorosa</u></h3>";

    //Mostramos por pantalla la frase con las variables $chica y $chico.
    echo "A <strong>$chica</strong> le gusta <strong>$chico</strong>.<hr>";

    //Subtítulo 2.
    echo "<h3><u>Nacimientos y edades</u></h3>";

    //Mostraremos por pantalla la siguiente frase involucrando todas las variables anteriormente declaradas.
    echo "Me llamo <strong>$chica</strong> y nací en el año <strong>$año_chica</strong>. Por lo tanto tengo <strong>$edad_chica</strong>.<br><br>";

    //Mostraremos por pantalla la siguiente frase involucrando todas las variables anteriormente declaradas.
    echo "Me llamo <strong>$chico</strong> y nací en el año <strong>$año_chico</strong>. Por lo tanto tengo <strong>$edad_chico</strong>.<hr>";

?>