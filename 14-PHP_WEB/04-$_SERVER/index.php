<?php
    /*
        * * * Explorando $_SERVER * * *

        A variável global $_SERVER no PHP contém informações sobre
        o ambiente do servidor web e a solicitação HTTP atual. 
        Ela é uma matriz associativa onde cada chave representa uma 
        informação específica

        $_SERVER tem diversas informações importantes

        SERVER_SOFTWARE => Identificação do servidor

        SERVER_NAME => Hostname, DNS ou IP do servidor
        
        SERVER_PROTOCOL => Protocolo do servidor
        
        SERVER_PORT => Porta do servidor
        
        QUERY_STRING => Argumentos após o ? na URL
    */

    echo '<pre>';
        print_r($_SERVER);
    echo '</pre>';

    echo '<h3> SAÍDAS </h3>';
    
    echo "Exibindo a home: {$_SERVER['MYSQL_HOME']} <br>";
    echo "Exibindo a porta do servidor: {$_SERVER['SERVER_PORT']} <br>";
    echo "Exibindo o host do servidor: {$_SERVER['HTTP_HOST']} <br>";
    echo "Exibindo o IP do servidor: {$_SERVER['SERVER_ADDR']} <br>";
    echo "Identificando o servidor: {$_SERVER['SERVER_SOFTWARE']} <br>";

    if ($_SERVER['SERVER_NAME'] == 'localhost') {

        echo 'Acessando o localhost';
        
    }