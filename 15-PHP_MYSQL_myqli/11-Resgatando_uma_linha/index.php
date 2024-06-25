<?php 
    /*
        ==============================================================
            * * RESGATANDO APENAS UMA LINHA * * *
        ==============================================================
        - Para os selects que precisamos de apenas um dados retornado,
        podemos utilizar o fetch_row();

        - Este método pode ser inserido depois de obter o resultado, ou
        seja, após o get_result()
    */

    $host = "localhost";
    $user = "root";
    $senha = "";
    $bancoDados = "cursophp";

    $conn = new mysqli($host, $user, $senha, $bancoDados);

    $id = 6;

    $stmt = $conn->prepare("SELECT * FROM itens WHERE id = ? ");

    $stmt->bind_param("i", $id);

    $stmt->execute();

    $resultado = $stmt->get_result();

    $item = $resultado->fetch_row();

    echo "<pre>";
        print_r($item);
    echo "</pre>";

    $conn->close();

?>