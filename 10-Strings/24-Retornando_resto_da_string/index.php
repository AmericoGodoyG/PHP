<?php 

    /* 
        * * *  Retornando o resto da string * * *
        
        Com a função strstr podemos encontrar um texto em uma string;

        Se algo for encontrador, a função vai retornar o resto da string
        após o texto encontrado;

        Se não encontrar nada retorna false.
    */

    $str = "Testando o resto da string, pra ver se dá certo";

    $resto = strstr($str, "resto");

    echo "$resto <br>";
 


    $s = "string";

    $resto2 = strstr($str, $s);

    echo "$resto2 <br>";


    
    if (strstr($str, ".NET") === false) {

        echo "String não encontrada";

    }

?>