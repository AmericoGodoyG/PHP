<?php 
    //Funcao que ferifica se um string
    //is_string()

    $str = "Américo";
    $num = 12;

    if (is_string($str)) { // true
        echo "É $str é  uma sitring <br>";
    }
    
    if (is_string($num)) { // false
        echo "É uma sitring";
    }
    
    if (is_string("askdoaspd")) { // true
        echo "É uma string 3";
    }
?>