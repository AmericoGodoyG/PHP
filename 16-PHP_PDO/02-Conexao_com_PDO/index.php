<?php 
    /*
        ==============================================================
        * * * CONEXÃO COM PDO (PHP DATA OBJECT) * * *
        ==============================================================
        - A conexão com PDO é um pouco diferente do mysqli, mas iremos
        informar basicamente os mesmos parâmetros;

        - Parâmetros: 
            banco de dados, host, nome do banco, usuário e senha

        Ex: 
        $conn = new PDO ("mysql:host=localhost;dbname=teste", $user, $pass);
    */

    $host = "localhost";
    $db = "cursophp";
    $user = "root";
    $pass = "";

   $conn =  new PDO("mysql:host=$host; dbname=$db", $user, $pass);

?>