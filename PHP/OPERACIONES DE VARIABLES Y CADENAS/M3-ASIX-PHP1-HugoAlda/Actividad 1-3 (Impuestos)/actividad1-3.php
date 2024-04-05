<?php

    echo "<title>Actividad 1-3</title>";

    echo "<h1><u>Actividad 1-3 - Impuestos</u></h1>";
    
    //Le asignamos un numero a la variable $precio.
    $precio = 200;

    //Le asignamos el valor correspondiente al IVA a la variable $IVA.
    $IVA = 1.21;

    //Le asignamos la operación correspondiente al calculo de un producto con IVA a la variable $conIVA.
    $conIVA = $precio * $IVA;

    //Mostramos por pantalla los precios sin IVA y con IVA.
    echo "El <strong>precio total sin iva</strong> es de <strong>$precio euros</strong> y <strong>con iva</strong> es de <strong>$conIVA euros</strong>.";

?>