<?php 
    /*
        * * * Operador Ternário * * *
        
        Constiui uma estrurtura de condição resumida;
                                
        Ex: 5 > 2 ? echo "5 é maior que dois" : echo "5 é menor que 2"

        A primeira interrogação vem depois da comparação;

        E o : é utilizado para uma segunda situação, caso a primeira seja falsa;
    */
    
    echo 20 > 10 ? "20 é maior que 10 (true)<br>" : "20 é menor que 10 (false) <br>";
   
    echo 20 > 50 ? "20 é maior que 50 (true)<br>" : "20 é menor que 50 (false) <br>";

    $a = 10;
    $b = 5;

    echo $a >= $b ? "A maior que B <br>" : "A menor que B <br>";

    echo $a === $b ? "A é idêntico a B <br>" : "A não é idêntico a B <br>";
    
    echo $a === $b && 10 > 5 ? "True <br>" : "False <br>";

?>