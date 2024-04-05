<?php

$array = array(0,1,2,3,4,5,6,7,8,9);

function bucle($array){
    for ($i = 0; $i <= 9; $i++){
        echo "La posición $i del array es --> " . $array[$i] . ".<br>";
    }
}

function suma($array) {
    $pos3=$array[3];
    $pos7=$array[7];
    
    return $suma=$pos3+$pos7;
}

echo bucle($array);
echo "<br>";
echo "La suma de las posiciones 3 y 7 es: " . suma($array) . ".";

?>