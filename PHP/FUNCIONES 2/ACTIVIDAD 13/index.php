<form method="POST">
    <label for="numero">Introduce un numero: </label>
    <input type="text" name="numero">
    <br><br>
    <button type="submit" name="btn">Comprobar si es par</button>
</form>

<?php

function par($a){
    if ($a % 2 == 0){
        return "Es par.";
    }else{
        return "No es par.";
    }
}

if (isset($_POST['btn'])){
    $num=$_POST['numero'];
    echo par($num);
}

?>