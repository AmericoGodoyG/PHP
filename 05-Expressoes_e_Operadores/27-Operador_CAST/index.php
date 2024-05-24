<?php 
    /*
        * * * Operador de Conversão - CAST * * *

        Podemos forçar uma variável ser de um determinado tipo;

        Nem todos são úteis, os mais utilizados são para converter 
        uma string em número:

        Operadores: int, float, string, array, Object e unset;

        Ex: $a = (float) "5.34243" #string é convertida para float.
    */

    $a = (int) "12";

    echo $a . "<br>";

    echo $a + 10 . "<br>";


    if ($a === 12) {
        //Tipo convetido com sucesso!
        echo "A é idêntico a 12 <br>";
    }

    $b = (float) "3.14";

    if ($b === 3.14) {
        //Tipo convetido com sucesso!
        echo "B é idêntico a 3.14 <br>";
    }

    $c = (string) 34;

    echo $c . "<br>";

    if ($c === "34") {
        //Tipo convetido com sucesso!
        echo "C é idêntico a 34(string) <br>";
    }
    
?>