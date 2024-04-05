<head>
<link rel="stylesheet" type="text/css" href="../css/styles.css">
</head>

<h1>Factorial</h1>
<h3>Ejercicio 6-4</h3>

<?php
    $num = $_POST['num1'];
   
    function fact($num){
        if($num==1){
            return 1;
        }else{
            return  $num*fact($num-1);
        }
    }
    echo "El factorial de $num es: " . fact($num);
?>