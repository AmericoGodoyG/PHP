<?php 
    /*
        * * *  Array para string  * * *
        
        Podemos converter um array em string 
        com a função implode();

        Passamos primeiro o separador como argumento;

        Depois a string que vai ser convertida;
    */  

    $arr = ["Maça", "Pera", "Mamão", "Batata."];

    $str = implode(", ", $arr);

    echo $str. "<br>";

    $arr2 = ["Avião", "Tanque", "Jipe", "Metralhadora"];

    $str2 = implode("<->", $arr2);

    echo $str2;

?>