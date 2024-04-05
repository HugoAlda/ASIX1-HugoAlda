<?php
    if(isset($_POST['error'])){
    echo "¡Pokemon erroneo!";
    }
    if(isset($_POST['intruso'])){
        echo "No cuela, introduce el nombre del pokemon.";
    }
?>

<br>

<h2 class="titulo">Adivina el Pokemon</h2>

<form action ="./recepcion.php" method="POST" id="formu"> <!-- otro metodo para enviar texto no sensible get y post es para datos sensibles -->
    <label for="Usuario">Nombre del pokemon:</label>
    <input type="text" name="usuario" id="usuario">
    <button type="submit" id="enviar">Adivinar</button>
</form>

<div class="img"> 
    <img src="./img/pikachu.png">
</div>

<head>
    <title>QUIZ DE POKEMONS</title>
    <link rel="stylesheet" href="./style.css">
</head>