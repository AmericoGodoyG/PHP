<?php 

    $lista = ["batata", "maçã", "pera", "feijão", "arroz"];

    $removidos = array_splice($lista, 2, 2);

    print_r($removidos);
    
    echo "<br>";
    
    print_r($lista);    
?>