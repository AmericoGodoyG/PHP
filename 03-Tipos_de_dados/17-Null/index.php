<?php
    /*  
        * * * Null * * * 
        Tem apenas um valor, o Null;
        Usado para checar se há um valor em uma variável;
        Função is_null() para checagem.
    */

    $numero = null;
    if (is_null($numero)) { // true;
        echo "é nulo";
    }
    
    $numero = 0;
    if (is_null($numero)) { // false 0!=null;
        echo "é nulo";
    }
?>