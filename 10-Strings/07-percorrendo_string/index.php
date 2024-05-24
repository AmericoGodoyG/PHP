<?php
    /*
        * * *  Percorrendo uma string  * * * 

        Podemos percorrer cada um dos caracteres de uma string

        Para isso usamos uma estrutura de repetição

        E o método strlen, para saber o número de caracteres

        Com isso podemos iterar pela string completa

        Ex:

            for ($x = 0; < strlen($str); $i++) {

                // codigo

            }

    */

    $str = "Esta é uma string muito grande, ela tem vários caracteres";

    for ($i = 0; $i < strlen($str); $i++) {

        echo "$str[$i] <br>";

    }

?>