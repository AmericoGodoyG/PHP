<?php 
    /*
        * * * Dividindo arrays * * *
        
        Podemos dividir um array grande 
        em diversos arrays de número de 
        elementos iguais

        Vamos utilizar a função array_chunk

        Passamos o array como argumento e 
        também o números de elementos que 
        cada array deve ter
    */


    $arr = range(1, 20);
    $arrays = array_chunk($arr, 10);

    echo "<pre>";
        print_r(array_chunk($arr, 4));
        print_r($arrays);
        print_r($arrays[1]);
    echo "</pre>";
    
?>