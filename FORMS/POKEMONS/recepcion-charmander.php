<?php
    $pokemon = $_POST["usuario"];
    
    if( $pokemon == strtolower("charmander")){
        session_start();
        $_SESSION['loginOK'] = $pokemon;
        header("location: charmander.php");
        echo "Pokemon correcto";
    }else{
        header("location:index.php?error=1");
    }

    if(isset($_POST['error'])){
    echo "¡Pokemon erroneo!";
    if(isset($_POST['intruso'])){
        echo "No cuela, introduce el nombre del pokemon.";
    }
    }
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>recepcion php</title>
</head>