<?php

    echo "<title>Actividad 2-1</title>";

    echo "<u><h1>Actividad 2-1 - Nos vamos de viaje</h1></u>";

    echo "<u><h3>Enunciado</h3></u>";

    echo "<ol><li>Guarda en un array los nombres de unos amigos.</li><br><li>Imprime la siguiente frase: “{amigo 1} se va de viaje”.</li><br><li>Crea otro array con el nombre de varias ciudades.</li><br><li>Imprime la siguiente frase: “{amigo 2} se va de viaje a {ciudad 1}”</li><br><li>Imprime aleatoriamente el nombre de un amigo.</li></ol>";

    //Array con el nombre de tus amigos
    $amigos = [
        'Ruben',
        'Pol',
        'Dylan',
        'Roberto',
        'Eric'
    ];

    echo "<u><h3>Ejercicio</h3></u>";

    //Imprime el array con los nombres de tus amigos
    var_dump($amigos);

    echo "<br><br><strong>$amigos[1]</strong> se va de viaje.<br>";

    //Array con nombre de ciudades
    $ciudades = [
        'Barcelona',
        'Madrid',
        'Salamanca',
        'Oviedo'
    ];

    echo "<br><strong>$amigos[2]</strong> se va de viaje a <strong>$ciudades[1]</strong>.";

    //Creacion de la funcion suffle
    function pistaShuffle($amigos) {
        //Barajamos el array de amigos de manera aleatoria.
        shuffle($amigos);

        //Seleccionamos dos amigos y una ciudad aleatoria.
        $amigo1 = $amigos[0];
        $amigo2 = $amigos[1];
        $ciudades = ['Barcelona','Madrid','Salamanca','Oviedo'];
        $ciudadAleatoria = $ciudades[array_rand($ciudades)];

        //Creamos la frase final.
        $frase = "<strong>$amigo1</strong> se va de viaje con <strong>$amigo2</strong> a la bonita ciudad de <strong>$ciudadAleatoria</strong>.";
    
        return $frase;
    }

    echo "<u><h3>Ejercicio Shuffle</h3></u>";

    //Con la variable $mensaje generado juntamos tanto el array aleatorio de la ciudad como de los amigos los cuales viajaran a dicha ciudad. 
    $listaAmigos = ['Ruben','Pol','Dylan','Roberto','Eric'];
    $mensajeGenerado = pistaShuffle($listaAmigos);
    echo $mensajeGenerado;

?>

<head>
    <link rel="stylesheet" type="text/css" href="./style.css">
</head>