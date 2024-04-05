<?php

$array = [];
for ($i = 0; $i <= 999; $i++) {
    $array[] = 'elemento' . $i;
}

function imprimir($array){
    foreach ($array as $elemento) {
        echo $elemento . "<br>";
    }
}

echo imprimir($array);