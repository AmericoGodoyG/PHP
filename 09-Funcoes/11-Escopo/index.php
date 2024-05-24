<?php 

    /*
        * * *  Escopo de funções  * * *

        Nas funções temos um escopo específico chamado de local,
        onde as suas variáveis são exclusivamente das funções;

        Podemos utilizar as variáveis globais com a instrução global;

        E também há os static, onde podemos manter um valor após a 
        execução de uma função, o que normalmente é resetado;
    */

    // Variável global 
    $a = 10;
    $b = 15;

    function testeEscopo() {

        // Variável local
        $a = 5;

        global $b;

        // Mantém o valor da variável.
        static $c = 0;

        $a++;

        $b++;

        $c++;

        echo "ESCOPO LOCAL DE A: $a <br>";

        echo "ESCOPO GLOBAL NA FUNÇÃO DE B: $b <br>";
        
        echo "ESCOPO STATIC NA FUNÇÃO DE C: $c <br>";

    }

    echo "ESCOPO GLOBAL DE A: $a <br>";
    echo "ESCOPO GLOBAL DE B: $b <br>";
    
    testeEscopo();

    echo "ESCOPO GLOBAL DE B(2): $b <br>";

    testeEscopo();

?>