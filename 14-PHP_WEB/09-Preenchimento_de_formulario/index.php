<?php
    /*
        * * * Preechimento de formulário * * *

        Podemos preencher o formulário com dados
        que vieram da requisição

        Isso acontece bastante em resultados de busca
        ou edições de registros 

        Podemos fazer uma chacagem de se o dados foi enviado
        e recebido para a página, e utilizar o echo para
        exibir no atributo value do input

        Ex:
            <input type="text" value="<?php echo $nome; ?>" />

        Obs: Usado nas edições de cadastro
    */

    // Mock banco de dados de uma tabela de usuário
    $usuario = [
        'nome' => 'Américo',
        'idade' => '25',
        'profissao' => 'Desenvolvedor'
    ];

    // Verificando se $usuario foi declarado e é != de null
    if(isset($usuario)){

        $nome = $usuario['nome'];
        $idade = $usuario['idade'];
        $profissao = $usuario['profissao'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Preenchendo o formulario com dados vindos do banco de dados</legend>
        <form action="">
            <div>
                <input type="text" name="nome" value="<?= $nome ?>" placeholder="Digite seu nome:">
            </div> 
            
            <br>

            <div>
                <input type="text" name="idade" value="<?= $idade ?>" placeholder="Digite sua idade:">
            </div>

            <br>

            <div>
                <input type="text" name="profissao" value="<?= $profissao ?>"placeholder="Digite sua profissão:">
            </div>

            <br>

            <div>
                <input type="submit" value="Enviar">
            </div>

        </form>
    </fieldset>
</body>
</html>