<?php 
    /*
        * * *  String Reversa  * * *

        Podemos com PHP inverter uma string, 
        a função strrev realiza a ação.

        Ela recebe a string que será invertida como parâmetro.

    */

    $nome = "americo";
    echo strrev($nome) . "<br>";

    $palavra = "Testando";
    $palavraIvertida = strrev($palavra);    
    echo $palavraIvertida;

    $frase = "O programador estava com o prazo curto para fazer o sistema";

    echo "<br>";

    echo $frase . "<br>";
    $fraseInvertida = strrev($frase) . "<br>";
    echo $fraseInvertida;

?>