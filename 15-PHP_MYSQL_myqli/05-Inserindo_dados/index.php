<?php 

    /*
    ==============================================================
    //        * * * Inserindo dados com mysqli * * * 
    ==============================================================
        - Para inserir dados com o mysqli vamos utilizar a mesma query
        do SQL puro e novamente o método query();

        - A instrução para inserir dados é a INSERT INTO;

        - Devemos passar a tabela, colunas e valores
    */

    $host = "localhost";
    $user = "root";
    $senha = "";
    $bancoDados = "cursophp";

    $conn = new mysqli($host, $user, $senha, $bancoDados);

    $tabela = "itens";
    $nome = "Xicara";
    $descricao = "Xicara de cor rosa";

    $insert = "INSERT INTO $tabela (nome, descricao) VALUES ('$nome', '$descricao')";

    $conn->query($insert);
    $conn->close();

?>