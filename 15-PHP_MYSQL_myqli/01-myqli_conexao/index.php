<?php 

    /*
        ==============================================================
 	    //          * * * Conectando com mysql * * *                //
        ==============================================================

        - Para conectar ao MySQL com mysqli precisamos utilizar a função
        mysqli_conect();

        - Passamos os parâmetros de: host, usuario, senha, e banco de dados

        - Com a conexão feita podemos utilizar os queries

        Ex:
            $conn = new mysqli("host","user","pass","db");
    */

    $host = "localhost";
    $user = "root";
    $senha = "";
    $bancoDados = "cursophp";

    // Instânciando um obejto a partir da função de conexão ao mysqli
    $conexao = new mysqli($host, $user, $senha, $bancoDados);

?>