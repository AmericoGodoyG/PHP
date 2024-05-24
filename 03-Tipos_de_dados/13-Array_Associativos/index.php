<?php
    /* * * * Arrays Associativos * * * *

     Cada índice é referencido por uma chave => valor

        Chave(índice): indicada com aspas simples
        Valor: referenciado com uma seta =>

    */
    $arr = ['nome' => 'Shark', 'patas' => 4, 'cor'=> 'Marrom'];

    //Exibe a saída do valor referênciado na chave nome;
    echo $arr['nome'];

    echo "<br>";

    //Exibe todos os elementos do array $arr.
    print_r($arr);

    $arrAssoc = ['Chave'=>'valor', 'bool'=>true];
    echo "<br>";
    print_r($arrAssoc);
?>