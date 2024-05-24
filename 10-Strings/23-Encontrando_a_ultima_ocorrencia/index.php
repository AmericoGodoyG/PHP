<?php 

    /*
        * * *  Encontrando a última ocorrência * * *

        Com a função strrpos podemos encontrar a última 
        ocorrência de um texto na string.

        Se recebermos algum valor é que o texto foi encontrado,
        e este valor é o índice inical;

        Se for retornado false, o texto não existe.

        strrpos();

    */

    $str = "Testando encontrado palavra teste, em uma string que tem teste";

    // Exibe o índice do íncio da palavra "teste" no final da string;
    $palavra = strrpos($str, "teste");
    echo $palavra . "<br>";
    
    // Exibe o índice do íncio da palavra "teste" no inicio da string;
    $palavra2 = strpos($str, "teste");
    echo $palavra2 . "<br>";

    if(strrpos($str,"Java") === false) {

        echo "A palavra Java não foi encontrada";

    }

    echo "<br>";

    $p = substr($str, strpos($str, "teste"), 5);
    echo $p;

    echo "<br>";

    $nome = "Américo";
    echo substr($nome, 0);
?>