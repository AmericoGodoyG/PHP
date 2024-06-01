<?php 
    /*
        * * * Criando variáveis com extract * * *

        Com a função extract() podemos criar 
        variáveis rapidamente de arrays associativos;

        O nome da chave será o nome da variável;

        Se houver uma variável já criada com o nome da chave,
        a mesma será sobrescrita;s
    */


    $arr = [
        'cor'=>'vermelho',
        'forma'=>'retângular',
        'material'=>'aço'
    ];

    /* 
        Cria variáveis a partir das chaves e valores 
        de arrays associativos
    */

    extract($arr);
    
    echo "$cor <br>";
    echo "$forma <br>";
    echo "$material <br>";


    echo "<br>";


    $nome = "Matheus";
    
    $pessoa = [
        'nome'=>'joão',
        'idade'=> 25
    ];
    
    echo "$nome <br>";
    
    extract($pessoa);

    echo "$nome <br>";
    echo "$idade<br>";

?>