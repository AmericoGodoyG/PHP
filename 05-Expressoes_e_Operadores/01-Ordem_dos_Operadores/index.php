<?php 
    /*
        O php e as linguagens de programação executam os operadores na mesma ordem que na matmática;

        Parenteses (): São utilizados para agrupar expressões e alterar a ordem de avaliação dos operadores.

        Exponenciação (**): Realiza a operação de exponenciação.

        Multiplicação (*), Divisão (/) e Módulo (%): Realizam operações de multiplicação, divisão e módulo (resto da divisão), respectivamente. 
        Esses operadores têm a mesma precedência e são avaliados da esquerda para a direita.

        Adição (+) e Subtração (-): Realizam operações de adição e subtração, respectivamente. 
        Também têm a mesma precedência e são avaliados da esquerda para a direita.

        Se houver operadores com a mesma precedência em uma expressão, eles são avaliados da esquerda para a direita. 
        O uso de parênteses pode ser útil para controlar a ordem de avaliação quando necessário.
    */

    echo 3 + 2 * 5;
    echo "<br>";

    echo (3 + 2) * 5;
    echo "<br>";

    echo 5 + 2 / 10;
    echo "<br>";

    $a = 5;
    $b = 2;
    $c = 10;
    echo $a + $b / $c;
    echo "<br>";

    $d = $a * $b * $c;

    echo $d;
    echo "<br>";
?>