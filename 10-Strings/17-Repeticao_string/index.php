<?php 
    /*
        * * *  Repetição de string  * * *

        Com a função str_repeat você pode repetir 
        n vezes uma determinada string.

        O primeiro argumento é a string que será repetida.

        O segundo é o número de repetições.
    */     

    $str = "Teste";
    $strRepetida = str_repeat($str, 5);
    echo $strRepetida . "<br>";

    $str2 = "Olá";
    echo str_repeat($str2, 10);
?>