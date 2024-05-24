<?php 

    /*
        * * *  Encontrando a primeira ocorrência  * * * 

        Com a função strpos podemos encontrar algum texto 
        na string;

        Se recebermos algum valor é que o texto foi encontrado,
        e este valor é o índice inical;

        Se for retornado false, o texto não está na string.

        strpos();

        Obs: não são apenas string completas que são encontradas,
        mas sim pedaçoes de strings
    */

    $str = "Estamos testando o método strpos";
    $testeEncontrar =  strpos($str, "strpos");
    echo $testeEncontrar . "<br>";
 
    $testeEncontrar2 =  strpos($str, "java"); // erro (false);
    echo $testeEncontrar2 . "<br>";

    if ($testeEncontrar2 === false) {
        echo "Palavra não encontrada";
    }

    $palavra = "com";
    $testeEncontrar3 = strpos($str, $palavra); // erro (variável dentro do método)
    echo "$testeEncontrar3 <br>";
    
    $palavra2 = "to";
    $testeEncontrar4 = strpos($str, $palavra2); // erro (variável dentro do método)
    echo "$testeEncontrar4 <br>";



?>