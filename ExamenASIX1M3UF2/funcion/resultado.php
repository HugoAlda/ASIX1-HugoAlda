<?php

$num=$_POST['num1'];

function fact($a){
    if($a==1){
        return 1;
    }
    else {
        return $a*fact($a-1);
    }    
}

echo "El factorial de $num es: " . fact($num);