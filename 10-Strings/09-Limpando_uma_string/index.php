<?php

    /*
        * * *  Limpando uma string  * * * 

        Podemos remover os espaços em branco 
        de uma string com funções de PHP.

        trim - limpa espaços antes e depois da string;
        ltrim - limpa espaços da parte inical da string;
        rtrim - limpa espaços da parte final da string;

        Desta forma conseguimos remover os espaços 
        desnecessários inseridos pelos usuários.

    */

    $str1 = "   Américo  ";

    echo "Esta é a string 1: $str1. <br>";

    $str1Limpa = trim($str1);

    echo "Esta é a string 1: $str1Limpa. <br>";

    $str1Limpa2 = rtrim($str1);

    echo "Esta é a string 1: $str1Limpa2. <br>";
?>