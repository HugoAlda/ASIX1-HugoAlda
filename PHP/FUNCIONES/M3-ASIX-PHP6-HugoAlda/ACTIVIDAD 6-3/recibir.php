<head>
<link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>

<h1>Circunferencia</h1>
<h3>Ejercicio 6-3</h3>

<?php
    // Definir PI
    define("PI", 3.1416);

    // Recibir el valor del radio desde el formulario
    $radio = $_POST['radio'];

    // Calcular el área y la longitud
    function area($radio) {
        return PI * $radio * $radio;
    }

    function longitud($radio) {
        return 2 * PI * $radio;
    } 

    // Mostrar los resultados
    echo "Área de la circunferencia: " . area($radio) . "<br>";
    echo "Longitud de la circunferencia: " . longitud($radio);
?>