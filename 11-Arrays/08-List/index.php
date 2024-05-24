<?php 

    /*
        * * * Criando muitas variáveis * * *
        
        Podemos criar muitas variáveis com base
        em um array;

        Para isso vamos utilizar a função list();

        Ex:

            list($nome, $idade, $profissao) = $pessoa;
        
        Obs: Descontruição de um array: criar diversas
        variáveis e atribuir os elementos de um array à 
        elas.
    */

    $pessoa = ["Américo", 25, 1.82, "Desenvolvedor"];
    print_r($pessoa);

    // list() atribui os elementos contidos em um array à variáveis.
    list($nome, $idade, $altura, $profissao) = $pessoa;

    echo "Nome: " . $nome . "<br>";
    echo "Idade: " . $idade . "<br>";
    echo "Altura: " . $altura . "<br>";
    echo "Profissção: " . $profissao . "<br>";
    
?>