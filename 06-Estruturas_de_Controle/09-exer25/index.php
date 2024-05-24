<?php 
    $a = 51;
    $b = 5;
    $c = "Americo";
    $d = "Teste";

    $resultado = 0;
    

    if (is_int($a) || is_float($a)) {

        $resultado = $a * 2;

        if ($resultado > 100) {

            echo "$resultado é maior que 100 <br>";

        } else {

            echo "$resultado é menor que 100 <br>";

        }
    }
   


    if (is_int($b) || is_float($b)) {

        $resultado = $b * 2;

        if ($resultado > 100) {

            echo "$resultado é maior que 100 <br>";

        } else {

            echo "$resultado é menor que 100 <br>";

        }
    }
   
   
   
    if (is_int($c) || is_float($c)) {

        $resultado = $c * 2;

        if ($resultado > 100) {

            echo "$resultado é maior que 100 <br>";

        } else {

            echo "$resultado é menor que 100 <br>";

        }

    } else {

        echo "$c não é um inteiro <br>";

    }



    if (is_int($d) || is_float($d)) {

        $resultado = $d * 2;

        if ($resultado > 100) {

            echo "$resultado é maior que 100 <br>";

        } else {

            echo "$resultado é menor que 100 <br>";

        }

    } else {

        echo "$d não é um inteiro <br>";

    }
  
?>