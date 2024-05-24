<?php 
    /*
        * * * Chamando funções * * *

        Para chamar uma função basta colocar
        o seu nome e abrir e fechar parênteses;

        Exemplo:

            funcaoTeste(paramêtro)


        Algumas funções exigem parâmetros;

        O ato de chamar uma função também é 
        conhecido como invocar.

        O PHP tem diversas funções para utilizarmos
        no nosso código, exemplos:

            strlen(), strtoupper(), strtolower(), print_r(), var_dump()

        
        OBS:
        Uma função só é exibida se for invocada / chamada.
        As funções devem ser adicionadas no TOPO do código.

    */

    // Definindo uma função
    function soma(){

        // Variáveis locais
        $a = 5;
        $b = 4;
        
        echo $a + $b . "<br>";

    }

    // chamando / invocando função 
    soma();
    soma();

    // função PHP
    echo strtoupper("testando funcao");

?>