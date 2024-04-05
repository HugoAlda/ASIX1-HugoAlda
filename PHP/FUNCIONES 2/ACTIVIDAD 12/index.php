<?php

function sumaArrays($a,$b){
    $res=[];
    for ($i=0;$i<count($b);$i++){
        $res[]=$a[$i]+$b[$i];
    }
    return $res;
}

$n1=[-17,4,8,-28];
$n2=[24,7,-14,9];

$res=sumaArrays($n1,$n2);

var_dump($res);

?>