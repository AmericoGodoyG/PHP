<?php
    /*
        * * * Escopo Local* * *
        
        Local: variável declarada em uma função;
        
        A variável local tem seu escopo definido dentro de uma funcao;
    
        Ela não é acessivel fora da mesma;
    
        O seu valor sempre é resetado quando a função é finalizada;
    */

    //var Global
    $x = 10;
    echo "$x global <br>";

    // Criando uma funcao teste 
    function teste() {
        $x = 5;
        echo "$x local <br>";
    }

    //Chamando a funcao teste
    teste();

    //Exibindo a var global
    echo "$x global <br>";

    //Chamando a funcao teste
    teste();

    // Criando uma função testando
    function testando() {
        $x = 12;
        echo "$x local 2 <br>";
    }

    // Chamando a função testando.
    testando();

    //Chamando a funcao teste
    teste();

    //Exibindo a var global
    echo "$x global <br>";
?>