<?php
    
    echo "<title>Actividad 1-1</title>";

    echo "<h1><u>Actividad 1-1 - Cálculos</u></h1><hr>";
    
    //Primero de todo asignaremos valores a las variables principales.

    //Le asignamos el numero 8 a la variable $num1.
    $num1 = 8;

    //Le asignamos el numero 4 a la variable $num2.
    $num2 = 4;

    //Una vez asignados los valores de las variables principales: $num1 y $num2, tocará asignar los valores de las variables a cargo de las operaciones, para asi posteriormente mostrarlas por pantalla.

    //A la variable $suma le asignamos la operación de suma entre las variables $num1 y $num2.
    $suma = $num1 + $num2;

    //A la variable $resta le asignamos la operación de resta entre las variables $num1 y $num2.
    $resta = $num1 - $num2;

    //A la variable $mult le asignamos la operación de multiplicación entre las variables $num1 y $num2.
    $mult = $num1 * $num2;

    //A la variable $div le asignamos la operación de división entre las variables $num1 y $num2.
    $div = $num1 / $num2;

    //Subtitulo 1
    echo "<h3><u>Números</u></h3>";

    //Hacemos un echo para mostrar por pantalla que la variable $num1 es el primer numero.
    echo "El <strong>primer número</strong> es <strong>$num1</strong>.<br>";
    
    //Hacemos un echo para mostrar por pantalla que la variable $num2 es el segundo numero.
    echo "El <strong>segundo número</strong> es <strong>$num2</strong>.<br><hr>";

    //Subtitulo 2
    echo "<h3><u>Operaciones</u></h3>";
    
    //Hacemos un echo para mostrar por pantalla la operación de suma entre las variables $num1 y $num2.
    echo "La <strong>suma</strong> de <strong>$num1</strong> y de <strong>$num2</strong> es <strong>$suma</strong>.<br>";
    
    //Hacemos un echo para mostrar por pantalla la operación de resta entre las variables $num1 y $num2.
    echo "La <strong>resta</strong> de <strong>$num1</strong> y de <strong>$num2</strong> es <strong>$resta</strong>.<br>";
    
    //Hacemos un echo para mostrar por pantalla la operación de multiplicación entre las variables $num1 y $num2.
    echo "La <strong>multiplicación</strong> de <strong>$num1</strong> y de <strong>$num2</strong> es <strong>$mult</strong>.<br>";
    
    //Hacemos un echo para mostrar por pantalla la operación de división entre las variables $num1 y $num2.
    echo "La <strong>división</strong> de <strong>$num1</strong> y de <strong>$num2</strong> es <strong>$div</strong>.<br><hr>"; 

?>