<?php 
    /*
        * * *  Parâmetros default  * * *
        
        Podemos passar parâmetros que já possuem 
        um valor pré-determinado;

        Então caso você não passe este parâmetro, o 
        valor default entra em cena;

        A função será executada normalmente com o valor
        definido;

        Ex:

            function teste($a = "padrão") {

                // codigo

            }


    */

    //          argumento defeault
    function teste($a = "teste") {

        echo "O valor de A é: $a <br>";

    }

    teste();
    teste("Olá");

    // OBS: Argumentos obrigatórios entes dos default
    function testando($b, $a = "x") {

        echo "O valor de a é: $a e b é: $b <br>";

    }

    testando("1");
    testando("1", "2");

?>