<?php 

    // Definindo uma função que retorna o quadrado de um número.

    function potencia($n){
        
        //variável local
        $processamento = $n ** 2;

        return $processamento;

    }


    // Invocações da funções

    $resultado = potencia(1);
    echo $resultado . "<br>";
    
    $resultado2 = potencia(4);
    echo $resultado2 . "<br>";
   
    $resultado3 = potencia(5);
    echo $resultado3 . "<br>";
   
    $resultado4 = potencia(7);
    echo $resultado4 . "<br>";
   
    $resultado5 = potencia(123);
    echo $resultado5 . "<br>";

?>