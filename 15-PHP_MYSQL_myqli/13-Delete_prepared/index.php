<?php 
    /*
        ==============================================================
        * * * DELETANDO DADOS COM PREPARED (DELETE) * * *
        ==============================================================
        - Para atualizar dados vamos seguir os mesmos passos de INSERT
        e SELECT;

        - Na hora de inserir WHERE para remover os registros, vamos
        inserir os prepared statements;

        - Sequência: prepare => bind_param => execute;

        - LEMBRANDO que DELETE sem WHERE, causa a remoção de todos os
        registros;
    */

    $host = "localhost";
    $user = "root";
    $senha = "";
    $bancoDados = "cursophp";

    $conn = new mysqli($host, $user, $senha, $bancoDados);

    $id = 13;

    $stmt = $conn->prepare("DELETE FROM itens WHERE id = ?");

    $stmt->bind_param("i", $id);

    $stmt->execute();

    $conn->close();
?>