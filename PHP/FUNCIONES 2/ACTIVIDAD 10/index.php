<?php

function minmaxarray($numElementos,$min,$max){
    $array=array();
    for ($i=0;$i<=$numElementos;$i++){
        $array[$i]=rand($min,$max);
        return $array;
    }
}

$numElementos=10;

$min=1;

$max=5;

$array=minmaxarray($numElementos,$min,$max);

var_dump($array);

?>