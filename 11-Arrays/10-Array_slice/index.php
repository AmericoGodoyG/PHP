<?php 
    /*
        * * * Resgatando elementos de array * * *
        
        Com a função array_slice podemos resgatar
        uma faixa de elementos de um array

        Passamos 3 parâmetros: o array, índice inicial
        e quantos elementos queremos a partir do índice.
    */

    $arr = [2, 4, 6, 8, 10, 12, 14, 16, 18];

    $slice1 = array_slice($arr, 1, 3);
    print_r($slice1);
    echo "<br>";

    $slice2 = array_slice($arr, 4, 4);
    print_r($slice2);
    echo "<br>";

    
    /* 
        Omitindo o último parâmetro, exibe a quantidade os elementos a partir do índice indicado
    */
    $slice3 = array_slice($arr, 4);
    print_r($slice3);
    echo "<br>";
    

    /*
        Com o terceiro parâmtro negativo, são omitidos 
        os 3 últimos índices do array, exibindo então
        apenas o intervalo dos índice 4 a 5;

        Ou seja: Serão exibidos os elementos dos índices
        4 a 5.  10 e 12.

    */
    $slice4 = array_slice($arr, 4, -3);
    print_r($slice4);
    echo "<br>";

?>