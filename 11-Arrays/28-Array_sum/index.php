<?php 
    /*
        * * * Somando itens de um array * * *

        Para somar os itens de um array utilizamos
        a função array_sum();

        Ela nos retorna a soma de todos os elementos 
        numéricos de array que passamos como argumento.
        
        Obs: Caso haja string no array, a função ignora
        e efetua a operação de soma apenas com os números.
    */

    $arr = range(1, 30);
    $soma = array_sum($arr);

    echo "1ª Soma = {$soma} <br>";

    $arr2 = [2, 4, 34, 34.1, 324, 12, 34];
    $soma2 = array_sum($arr2);

    echo "2ª Soma = {$soma2} <be>";
?>