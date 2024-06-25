<?php 
    /*
        ==============================================================
        * * * SELECIONANDO DADOS COM PREPERED * * * (SELECT)
        ==============================================================
        - Para selecionar dados com prepared statements devemos regatar
        os dados com o método fetch_all;

        - A sequência será: 
            
            prepare => bind_param => execute => get_result => fetch_all;

        - fechar a conexão
    */

    $host = "localhost";
    $user = "root";
    $senha = "";
    $bancoDados = "cursophp";

    $conn = new mysqli($host, $user, $senha, $bancoDados);

    $id = 4;

    $stmt = $conn->prepare("SELECT * FROM itens WHERE id > ?");

    $stmt->bind_param("i", $id);

    $stmt->execute(); // executando a query

    $resultado = $stmt->get_result(); // retorno dos dados

    $dados = $resultado->fetch_all(); // selecionando todos os dados da tabela itens

    echo"<pre>";
        print_r($dados); // exibindo a lista de dados
    echo"</pre>";

    $conn->close();
?>