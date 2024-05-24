<?php

    /*
        * * *  Alterando o case de palavras  * * *
        
        Podemos alterar o case apenas das palavras com funções PHP

        ucfirst() - Primeira letra da string em minúsculas;

        ucwords() - Primeira letra de cada palavra em maiúsculas;
    */

    $frase = "Testando o case de uma palavra <br>";
    $frase2 = "Testando o case de uma palavra <br>";
    $frase3 = "Testando o case de uma palavra <br>";

    // Primeira letra em maiúsculo.
    echo ucfirst($frase);
    echo ucfirst($frase2);

    // Todas as palavras iniciais maiúsculas.
    echo ucwords($frase3);
    echo ucwords($frase2);

