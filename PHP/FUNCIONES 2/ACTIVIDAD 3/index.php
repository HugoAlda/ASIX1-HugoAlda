<form method="POST">
    <label for="numero">Introduce un numero: </label>
    <input type="number" name="numero">
    <br><br>
    <button type="submit" name="btn">Enviar</button>
</form>

<?php

function mayorque($num){
    if ($num>=10){
        return "El número es mayor o igual que 10.";
    }else{
        return "El número es menor que 10.";
    }
}

if (isset($_POST['btn'])){
    $num=$_POST['numero'];
    echo mayorque($num);
}

?>