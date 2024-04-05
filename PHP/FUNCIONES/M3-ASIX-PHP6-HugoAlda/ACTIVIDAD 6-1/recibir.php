<?php

function suma($a, $b){
    return $a + $b; 
}

if (isset($_POST['boton'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];    
    echo "La suma de $num1 y $num2 es: " . suma($num1, $num2);
}

echo "<br>";

function resta($a, $b){
    return $a - $b; 
}

if (isset($_POST['boton'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];    
    echo "La resta de $num1 y $num2 es: " . resta($num1, $num2);
}

echo "<br>";

function multi($a, $b){
    return $a * $b; 
}

if (isset($_POST['boton'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];    
    echo "La multiplicación de $num1 y $num2 es: " . multi($num1, $num2);
}

echo "<br>";

function div($a, $b){
    return $a / $b; 
}

if (isset($_POST['boton'])){
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];    
    echo "La division de $num1 y $num2 es: " . div($num1, $num2);
}

?>