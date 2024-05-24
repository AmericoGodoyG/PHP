<?php 
    /*
        * * * Números de elementos * * * 
        
        Podemos obter o número de elementos
        de uma array com a função count();

        Basta passar o array como argumento;

        Um inteiro será retornado;

    */

    
    $arr = [1, 2, 3];
    // Exibe a quantidade de elementos do array
    echo count($arr) . "<br>";


    // Criando um array a partir da função range();
    $arr2 = range(1, 10);
    echo count($arr2) . "<br>";


    // Criando um array associativo;
    $arrAssoc = [
        'nome' => 'Américo', 
        'idade' => 25,
        'profissao'=>'Desenvolvedor'
    ];

    echo count($arrAssoc) . "<br>";
?>