<?php 
    //Textos são cinhecidos como strings
    //Podendo ser escritos em aspas simples ou duplas
    //Intepretam variáveis.

    echo "Testando texto de aspas duplas <br>";
    echo 'Testando texto de aspas simple s<br>';
    echo "Ele disse 'Olá!' <br>";
    echo 'Ele disse "Olá!" <br>';


    $idade = 24;
    
    //Intepretam variáveis.
    echo "Ele tem $idade anos! <br>";

    //aspas simples não interapreta variáveis concatendas
    echo 'Ele tem $idade anos!';
?>