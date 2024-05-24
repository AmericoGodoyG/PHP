<?php 
    /*
        * * * Operadores de Atribuição * * *

        Com estes operadores podemos atribuir valor a uma variável;

        O mais conhecido é o = (igual)

        Operadores: +=, -=, /=, *= e %=;

        Cada um fará uma operação antes da atribuição.
    */
    
    // +=
    $a = 0;
    $a += 10; // $a = $a + 10
    echo $a . "<br>";

    // -=
    $b = 0;
    $b -= 5; // $b = $b - 5
    echo $b . "<br>";

    // *=
    $c = 5;
    $c *= 2; // $c = $c * 2
    echo $c . "<br>";

    // /=
    $d = 5;
    $d /= 2; // $d = $d / 2
    echo $d . "<br>";


    // %=
    $e = 5;
    $e %= 2; // $e = $e % 2
    echo $e . "<br>";

    // Utilização com variáveis
    $f = 10;
    $x = 20;

    $f += $x; // $f = $f + $x;
    echo $f . "<br>";

    $f -= $x; // $f = $f - $x;
    echo $f . "<br>";

    $f *= $x; // $f = $f * $x;
    echo $f . "<br>";

    $f /= $x; // $f = $f / $x;
    echo $f . "<br>";
    
    $f %= $x; // $f = $f % $x;
    echo $f . "<br>";

?>