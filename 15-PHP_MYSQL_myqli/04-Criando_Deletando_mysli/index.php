<?php 
    /*
        ==============================================================
        /     * * * Criando e deletando tabelas com myslq * * * 
        ==============================================================
        - Para criar e deletar tabelas vamos utilizar as mesmas queries
        de SQL puro, porém com o auxílio do método query;

        - DROP TABLE para deletar tabelas;
        - CREATE TABLE para iniciar tabelas;

        OBS: Lembre de fechar a conexão!
    
    */

    $host = "localhost";
    $user = "root";
    $senha = "";
    $bancoDados = "cursophp";

    $conn = new mysqli($host, $user, $senha, $bancoDados);

    /* CRIANDO TABELA com mysqli 
        $createTable = "CREATE TABLE teste (nome VARCHAR (100), sobrenome VARCHAR(100))";
        $conn->query($create);
        $conn->close();
    */

    /* DELETANDO TABELA com mysqli
        $dropTable = "DROP TABLE teste";
        $conn->query($dropTable);
        $conn->close();
    */
?>