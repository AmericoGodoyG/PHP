<?php 
    /*
        ==============================================================
        * * * ATUALIZANDO DADOS COM PREPARED * * *
        ==============================================================
        - Para atualizar dados vamos seguir os mesmos passos de INSERT
        e SELECT;

        - Na hora de inserir o SET para atualizar os campos, vamos
        inserir os prepared statements;

        - Sequência: prepared =>bind_param => execute;
    */

    $host = "localhost";
    $user = "root";
    $senha = "";
    $bancoDados = "cursophp";

    $conn = new mysqli($host, $user, $senha, $bancoDados);

    $stmt = $conn->prepare("UPDATE itens SET nome = ?, descricao = ? WHERE id = ? ");

    $nome = "Sofá";
    $descricao = "Sofá somi-novo";
    $id = 11;

    $stmt->bind_param("ssi", $nome, $descricao, $id);

    $stmt->execute();


    if ($stmt->error) {
        echo "Erro: {$stmt->error}";
    }

    
?>