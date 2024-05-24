<?php 
    /*
        * * * Resgatando uma parte da string * * *

        Com a função substr, podemos regastar apenas 
        uma parte da string;

        Ex:

            substr(str, início, fim);


        Str - é a string que vamos procurar algo;

        Início - é o índice inical da palavra ou texto;

        Fim - é o índice final da palavra ou texto;

    */

    $str = "Esta é a minha string";
    
    // STRING PAI, ÍNDICE INICIAL, COMPRIMENTO DA ALAVRA.
    $minha = substr($str, 10, 5); 
    echo $str . "<br>";
    echo $minha;

    echo "<br>";

    // OMITIR COMPRIMENTO = PEGAR ATÉ O FIM.
    $str2 = "Testando esta string abc";
    $novaString = substr($str2, 8);
    echo $novaString;

    echo "<br>";

    // COMPRIMENTO NEGATIVO = REMOVER DO ULTIMO INDICE.
    $novaString2 = substr($str2, 8, -3);
    echo $novaString2 . "<br>";
?>