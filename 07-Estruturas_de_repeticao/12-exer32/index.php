<?php 
    $arr = [];

    //Armazenando numeros inteiros de 10 a 20 em um array.
    for ($i = 0; $i < 10; $i++) {
        $arr[$i] = $i + 10;
    } 

    //Exibindo os elementos do array.
    for ($j = 0; $j < 10; $j++) {

        if ($arr[$j] % 2 != 0) {
            echo $arr[$j] . '<br>';
        }
    }

    echo "<pre>";
        print_r($arr);
    echo "</pre>"
    
?>