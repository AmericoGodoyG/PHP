<?php 
    /*
        * * * Variável Global * * * 
        
        Declarada fora de funções;

        NÃO são acessíveis dentro de funções;

    * */

    //Variável global.
    $teste = "asd";
    echo "$teste global 1 <br>";

    //Alterando o dado de $teste de acordo com uma condição.
    if (5 > 2) {
        $teste = "dsa";
        echo "$teste if <br>";
    }

    //Exibindo $teste após a alteração.
    echo "$teste global 2";

    //Função com var $teste local.
    function funcao () {
        $teste = "xsxs";
        echo "$teste var teste local <br>";
    }
    funcao(); // Chamando a funcao com var $teste no escopo local.

    //Função que possibilita alterar uma var global dentro de uma função.
    function testandoGlobal () {
        global $teste; // Defininado a instrução global à var $teste.
        $teste = 2; // Aleterando o valor da var $teste (global) em uma função.
        echo "$teste testando variavel global dentro de uma função";
    }
    testandoGlobal();
?>