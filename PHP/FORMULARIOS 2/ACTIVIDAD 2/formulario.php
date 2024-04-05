<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Actividad 7-2 - Reserva de apartamentos</title>
</head>
<body>
    <h1><u>Actividad 7-2 - Reserva de apartamentos</u></h1>
    
<?php
// Inicializamos el array de ciudades con sus precios
$ciudades_precios = [];

// Procesar el formulario de añadir ciudad
if(isset($_POST['submit_ciudad'])) {
    $nombre_ciudad = $_POST['nombre_ciudad'];
    $precio = $_POST['precio'];

    // Añadir la ciudad y su precio al array
    $ciudades_precios[] = ['nombre' => $nombre_ciudad, 'precio' => $precio];
}

// Procesar el formulario de reserva
if(isset($_POST['submit_reserva'])) {
    $indice_ciudad = $_POST['ciudad_seleccionada'];
    $ciudad_seleccionada = $ciudades_precios[$indice_ciudad]['nombre'];
    $precio_seleccionado = $ciudades_precios[$indice_ciudad]['precio'];
    // Aquí puedes procesar la reserva según la ciudad seleccionada y su precio
    echo "Has seleccionado reservar en: $ciudad_seleccionada con un precio de: $precio_seleccionado";
}

?>

<h2><u>Añadir Ciudad y Precio</u></h2>
<form method="post">
    <label for="nombre_ciudad">Nombre de la Ciudad:</label>
    <input type="text" name="nombre_ciudad" required>
    <br><br>
    <label for="precio">Precio:</label>
    <input type="number" name="precio" required>
    <br><br>
    <input type="submit" name="submit_ciudad" value="Añadir Ciudad">
</form>
<br>
<h2><u>Reservar en una Ciudad</u></h2>
<form method="post">
    <label for="ciudad_seleccionada">Selecciona una Ciudad:</label>
    <select name="ciudad_seleccionada" required>
        <?php foreach($ciudades_precios as $indice => $ciudad_precio) {
            echo "<option value='$indice'>{$ciudad_precio['nombre']}</option>";
        } ?>
    </select>
    <br><br>
    <label for="precio_seleccionado">Precio de la reserva:</label>
    <select name="precio_seleccionado" required>
        <?php foreach($ciudades_precios as $indice => $ciudad_precio) {
            echo "<option value='{$ciudad_precio['precio']}'>{$ciudad_precio['precio']}</option>";
        } ?>
    </select>
    <br><br>
    <label for="wifi">Wifi:</label>
    <select name="wifi">
        <option value="Si">Si</option>
        <option value="No">No</option>
    </select>
    <br><br>
    <input type="submit" name="submit_reserva" value="Reservar">

</form>

</body>
</html>