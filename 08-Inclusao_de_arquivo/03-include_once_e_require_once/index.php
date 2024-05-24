<?php
    /*
        * * * include_once & require_once * * *
        
        Ambos funcionam da mesma maneira que require e include;

        Porém, impedem que o mesmo arquivo seja adicionado mais 
        de uma vez por página;

        Método mais indicado quando montamos tamplates com PHP.
    */

    //Arquivos que não existem
    //include_once "teste.php";
    //include_once "teste2.php";
    //include_once "teste2.php";

    //Arquivo que não existe
    //require_once "teste.php";


    require_once "teste2.php";
    require_once "teste3.php";
    

?>

<p>Testando código</p>