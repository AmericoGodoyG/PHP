<?php 
    /*
        * * *  Tamanho da string  * * *

        Utilizando a função strlen com 
        uma string como parâmetro, vamos
        receber o tamanho da string;

        Ou seja, a quantidade de caracteres da mesma

        Ex:

            strlen($string);

        Obs: strlen() faz a contagem de acentos e espaços.
    */

    $str1 = "Esta string é muito grande";

    $str2 = "Essa não";

    echo strlen($str1) . "<br>";
    echo strlen($str2) . "<br>";

    if ($str1 > $str2) {

        echo "A string 1 é maior que a string 2";

    } else {
        
        echo "A string 2 é maior que a string 1";

    }

?>