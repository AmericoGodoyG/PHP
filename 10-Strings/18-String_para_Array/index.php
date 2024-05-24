<?php 

    /*
        * * *  String para Array  * * *
        
        Podemos converter uma string em array com 
        a função explote;

        Passamos primeiro o separador como argumento;

        Depois a string que que vai ser convertida.
    */

    $frase = "Testando o explode";
    $fraseArray = explode(" ", $frase);
    print_r($fraseArray);

    echo "<br>";

    $fraseArray2 = explode(",", $frase);
    print_r($fraseArray2);
    echo "<br>";

    $fraseB = "Carro, Avião, Barco, Navio";
    $fraseB = explode(",", $fraseB);
    print_r($fraseB);

    echo "<br>";

    for ($i = 0; $i < count($fraseB); $i++) {

        echo "$fraseB[$i]";

    }
?>