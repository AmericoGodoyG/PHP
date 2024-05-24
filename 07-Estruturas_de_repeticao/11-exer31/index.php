<?php 
    $arr = [];

    //Armazenando numeros inteiros de 1 a 10 em um array.
    for ($i = 1; $i <= 10; $i++) {
        $arr[$i] = $i;
    }  

    //Exibindo os elementos do array.
    for ($j = 1; $j <= 10; $j++) {
        echo $arr[$j] . '<br>';
    }
?>