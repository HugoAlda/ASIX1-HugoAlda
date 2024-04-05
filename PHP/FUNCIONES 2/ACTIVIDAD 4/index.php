<form method="POST">
    <label for="numero">Introduce un numero: </label>
    <input type="number" name="numero">
    <br><br>
    <button type="submit" name="btn">Devolver modulo</button>
</form>

<?php

function modulo($num){
    if ($num >= 0){
        return $num;
    }else{
        return $num*-1;
    }
}

if (isset($_POST['btn'])){
    $num=$_POST['numero'];
    echo modulo($num);
}

?>