<h1>Ejercicio 7-2 - Reserva de apartamentos</h1>

<?php

$apartamentos=[
	['precio/noche' => 37,'ciudad' => 'Valencia','wifi' => True,'pagina web' => 'https://hotel.com'],
	['precio/noche' => 87,'ciudad' => 'Madrid','wifi' => False,'pagina web' => 'https://motel.es']
];

if (isset($_POST['btn'])){
    $num = $_POST['num-msg'];
    $opcion = $_POST['opcion'];
}

?>