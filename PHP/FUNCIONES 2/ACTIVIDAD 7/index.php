<?php

$array = array(0,1,2,3,4,5,6,7,8,9);

function bucle($array){
    for ($i = 0; $i <= 9; $i++){
        echo "La posición $i del array es --> " . $array[$i] . ".<br>";
    }
}

bucle($array);

?>