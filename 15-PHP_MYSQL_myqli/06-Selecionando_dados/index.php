<?php 
    /*
        ==============================================================
        /        * * * Selecionando dados com mysqli * * * 
        ==============================================================
        - Para resgatando dados com mysqli vamos utilizar a mesma query
        do SQL puro e novamente o método query();

        - A instrução para inserir dados é a SELECT;

        - Vamos inserir o método query em uma variável, que é onde 
        receberemos os resultados.

        - Com o método fetch_assoc, transformamos os resultados em um array
    */

    $host = "localhost";
    $user = "root";
    $senha = "";
    $bancoDados = "cursophp";

    $conn = new mysqli($host, $user, $senha, $bancoDados);

    $select = "SELECT * FROM itens";

    $resultado = $conn->query($select);
    $conn->close();

    // UM RESULTADO
    $item = $resultado->fetch_assoc();

    echo "<pre>";
        print_r($item);
    echo "</pre>";

    echo "<br>";

    // TODOS OS RESULTADOS
    $itens = $resultado->fetch_all();

    echo "<pre>";
        print_r($itens);
    echo "</pre>";
    
    
?>