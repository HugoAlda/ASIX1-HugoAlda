<?php 
session_start();
if (!isset($_SESSION['loginOK'])){
header("location:index.php?intruso=1");   
}
?>

<br>

<h2 class="titulo">Adivina el Pokemon</h2>

<form action ="./recepcion-charmander.php" method="POST" id="formu"> <!-- otro metodo para enviar texto no sensible get y post es para datos sensibles -->
    <label for="Usuario">Nombre del pokemon:</label>
    <input type="text" name="usuario" id="usuario">
    <button type="submit" id="enviar">Comprobar</button>
</form>

<div class="img"> 
    <img src="./img/charmander.png">
</div>

<?php 

$user = $_SESSION['loginOK'];

?>

<head>
    <title>QUIZ DE POKEMONS</title>
    <link rel="stylesheet" href="./style-charmander.css">
</head>