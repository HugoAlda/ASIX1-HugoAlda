<?php 
session_start();
if (!isset($_SESSION['loginOK'])){
header("location:index.php?intruso=1");   
}

$user = $_SESSION['loginOK'];

?>

<br>

<h1 class="titulo">¡FELICIDADES!</h1>

<h4 class="titulo">¡Has adivinado todos los pokemons!</h4>

<div class="titulo">
    <button>
        <a href="./index.php">Comenzar de nuevo</a>
    </button>
    <p>¡Presiona el boton para comenzar de nuevo!</p>
</div>

<head>
    <title>QUIZ DE POKEMONS</title>
    <link rel="stylesheet" href="./style-final.css">
</head>