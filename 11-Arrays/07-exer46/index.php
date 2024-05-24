<?php 

    // Criando um array multidimensional.
    $arr = [
        [1, 2, 3, 4],
        [2, 4, 6, 8],
        [3, 6, 9, 12]
    ];

    // Percorrendo os elementos do array externo.
    for ($i = 0; $i < count($arr); $i++) {
        
        echo "Elementos do array de índice {$i} <br>";

        // Percorrendo e exibindo os elementos dos arrays internos.
        for ($j = 0; $j < count($arr[$i]); $j++) {

           echo $arr[$i][$j] . "<br>";

        }

        echo "Mundando de array! <br>";

    }
    
?>