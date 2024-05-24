<?php 
    /*
        * * * Include * * *

        Com o include inserimos um arquivo php, ou até mesmo um html
        em outro

        Podendo assim utilizar tudo que está declarado no arquivo incluido;

        Include não gera erro fatal se o arquivo não existir, e sim um warning;

        Ex:
            include "arquivo.txt";
    */

    //Inserindo outro arquivo php.
    include "teste.php";

    //php no php
    echo "PHP dendo do PHP | $c";
?>

<p> HTML </p>

<!--php no html-->
<p>
    <?php
        echo "PHP dentro do HTML | $c";
    ?>
</p>