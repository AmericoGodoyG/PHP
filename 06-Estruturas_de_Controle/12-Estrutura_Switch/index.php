<?php 
    /*
        * * *   Switch Case  * * *

        Switch permite a substituição do if em alguns casos.

        Usamos o break para ele não ser mais executado.

        Usamos o default caso nenhuma opção seja satisfeita.
    */


    $x = 5;

    switch($x) {
        case 0:
            echo "X é igual a 0 <br>";
            break;

        case 1:
            echo "X é igual a 1 <br>";
            break;
        
        default:
            echo "X não é igual a nenhum dos valores mencionados <br>";
    }



    $y = "Américo";

    switch($y) {

        case "Matheus":
            echo "O nome é Matheus <br>";
            break;

        case "Américo":
            echo "O nome é Américo <br>";
            break;
        
        default:
            echo "Nome não encontrado <br>";
    }
?>