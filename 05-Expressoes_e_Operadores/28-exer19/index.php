<?php

    $a = (int) "testando";
    echo $a . "<br>"; // cast de string p/ int resulta em 0;

    $b = (int) 12.9;
    echo $b . "<br>"; // cast de float p/ int exibe apenas o 12

    $c = (int) true;
    echo $c . "<br>"; // cast de bolean p/ int exibe 1
    
    $d = (int) [1,2,3]; 
    echo $d . "<br>"; // cast de um array  p/ int exibe 1

?>