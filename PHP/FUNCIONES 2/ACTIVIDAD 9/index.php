<form action="" method="post">
    <label>Introduce un numero: </label>
    <input type="number" name="num1"/>
    <br><br>
    <label>Introduce un segundo numero: </label>
    <input type="number" name="num2">
    <br><br>
    <input type="submit" value="Comprobar" name="btn">
</form>

<?php
if(isset($_POST['btn'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];

    function maximo($a, $b) {
        if ($a > $b) {
            return "$a es mayor que $b.";
        } else {
            return "$b es mayor que $a.";
        }
    }

    echo maximo($num1, $num2);
}
?>