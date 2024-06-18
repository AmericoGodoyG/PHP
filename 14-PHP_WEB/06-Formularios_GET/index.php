<?php

    /*  
        * * * Teste de formulários com GET * * *

        Vamos precisar criar um formulário e definir
        o método como GET, e também o arquivo ou rota 
        que vamos acessar em action

        No lado do servidor vamos acessar a variável
        $_GET que contém os parâmetros enviados para o
        servidor;

        Faremos o processamento e retornamos algo para 
        o usuário.
    */

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário com GET</title>
</head>

<body>

    <p>Solicitando informações através de um formulário GET</p>

    <fieldset>
        <form action="processamento.php" method="GET">
            <div>
                <input type="text" name="nome" placeholder="Nome:">
            </div>

            <br>

            <div>
                <input type="text" name="idade" placeholder="Idade:">
            </div>

            <br>

            <div>
                <input type="text" name="cidade" placeholder="Cidade:">
            </div>

            <br>

            <div>
                <input type="submit" value="Enviar">
            </div>
        </form> 
    </fieldset>

</body>

</html>