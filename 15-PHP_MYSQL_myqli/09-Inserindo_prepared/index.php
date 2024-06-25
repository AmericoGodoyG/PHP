<?php 
    /*
        ==============================================================
        /            * * * Inserindo dados com prepared * * * 
        ==============================================================
        - prepare => bind_param =>execute;

        - Como teremos uma variável para guardar estes três passos
        também devemos fechar a conexão desta variável;

        - Ela é comumente chamada de statement; (declaração)

        - lembre-se de fechar a conexão.
    */

    $host = "localhost";
    $user = "root";
    $senha = "";
    $bancoDados = "cursophp";

    $conn = new mysqli($host, $user, $senha, $bancoDados);

    // Dados vindo por POST
    $nome = "Suporte de microfone";
    $descicao = "Marca FIFNE";

    $stmt = $conn->prepare("INSERT INTO itens (nome, descricao) VALUES (?, ?)");

    $stmt->bind_param("ss", $nome, $descicao); // s = string, i = integer, d = double

    $stmt->execute(); // execução da query

    $conn->close();
?>