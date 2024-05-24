<?php 

    $arr = [];

    //Armazrnando inteiros de 1 a 20 em um array
    for ($i = 1; $i <= 20; $i++) {
        $arr[$i] = $i;
    }
    
    echo "<pre>";
        print_r($arr);
    echo "</pre>";


    //Exibindo apenas números pares
    for ($j = 1; $j <= 20; $j++) {
        
        if ($arr[$j] % 2 == 0) {
            echo $arr[$j] . '<br>';
        }

    }

?>