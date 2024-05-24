<?php 

    /*
        * * * Descobrindo argumentos * * *
        
        func_get_arg = retorna um array com os argumentos de uma função

        func_num_args = retorna o número de argumentos de uma função.


    */

    function soma($a, $b, $c) {

        print_r(func_get_args());

        echo "<br>";

        echo func_num_args() . "<br>";

        return $a + $b + $c;

    }

    soma(2, 4, 5);

?>