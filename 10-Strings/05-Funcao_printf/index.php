<?php

    /*
        * * * Função printf * * *

        A função printf tem a funcionalidade semelhante a print;

        Porém podemos imprimir valores de forma dinâmica utilizando 
        o símbolo % ;

        Ex:

            printf("Número %d", 1);

    */ 
    

    // %s -> string
    $nome = "Américo";
    printf("O nome é %s <br>", $nome);


    // $d -> int
    $n = 10;
    printf("O número é %d e outro é %d <br>", $n, 150);


    // $f -> float
    $temparatura = 12.58;
    printf("A temparatura atual é %.1f <br>", $temparatura);
?>