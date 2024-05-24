<?php 

    //Definindo uma função
    function nomeCompleto() {
        
        $nome = "Américo";
        $sobrenome = "Godoy da Silva";
        
        $nomeCompleto = $nome . " ". $sobrenome;

        echo "$nomeCompleto" . "<br>";

    }
    //Invocando uma função
    nomeCompleto(); 



    //Definindo uma função
    function nomeArray() {

        $nome = ["Américo", "Godoy", "da", "Silva"];

        // implode - une um array em uma única string.
        $nomeCompleto = implode(" ", $nome);

        echo $nomeCompleto;
        
    }

    //Invocando uma função
    echo nomeArray();

?>