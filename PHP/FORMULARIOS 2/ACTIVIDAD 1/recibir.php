<title>Actividad 7-1 - Calculadora de newsletter</title>

<h1>Actividad 7-1 - Calculadora de newsletter</h1>

<?php

// Asignacion precios
$precio1 = 0;
$precio2 = 0.7;
$precio3 = 0.2;

// Funciones para los precios
function calcularPrecio($a, $b, $opcion){
    if ($opcion == 'Si'){
        return (($a * $b) + ($a * 0.1));
    }elseif ($opcion == 'No'){
        return $a * $b;
    }
}

// Recogida y asignacion de variables del formulario y operaciones con los condicionales
if (isset($_POST['btn'])){
    $num = $_POST['num-msg'];
    $opcion = $_POST['opcion'];
    
    if ($num >= 0 && $num <= 2000){
        echo "El numero está entre 0 y 2000. <br>";
        echo "El envio es gratis. <br>";
        echo "El precio correspondiente es: " . calcularPrecio($num, $precio1, $opcion) . " €.";
    } elseif ($num >= 2001 && $num <= 10000){
        echo "El numero está entre 2001 y 10000. <br>";
        echo "El envio no es gratis. <br>";
        echo "El precio correspondiente es: " . calcularPrecio($num, $precio2, $opcion) . " €.";
    } elseif ($num >= 10001){
        echo "El numero es mayor a 10001. <br>";
        echo "El envio no es gratis. <br>";
        echo "El precio correspondiente es: " . calcularPrecio($num, $precio3, $opcion) . " €.";
    } 
}

?>