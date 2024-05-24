<?php 

    function defineCorCarro($cor = "vermelho") {

        return "A cor do carro é: $cor <br>";

    }

    $corCarro = defineCorCarro();
    echo "$corCarro";
   
    $corCarro = defineCorCarro("Azul");
    echo "$corCarro";
   
    $corCarro = defineCorCarro("Branco");
    echo "$corCarro";
?>