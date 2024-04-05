<form method="POST">
    <label for="peso">Introduce tu peso(kg): </label>
    <input type="text" name="peso">
    <br><br>
    <label for="altura">Introduce tu altura(m): </label>
    <input type="text" name="altura">
    <br><br>
    <button type="submit"name="btn">Calcular masa corporal</button>
</form>

<?php

function imc($peso,$altura){
    $imc=$peso/($altura*$altura);
    return $imc;
}

if (isset($_POST['btn'])){
    $peso=$_POST['peso'];
    $altura=$_POST['altura'];
    echo "Tu masa corporal es de: " . round(imc($peso, $altura)) . ".";
}

?>