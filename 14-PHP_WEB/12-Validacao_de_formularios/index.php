<?php 
    /*
        * * * Validação de formulários * * *

        A validação é a parte mais importante do recebimento de dados

        Devemos checar se os dados enviados condizem com o que estamos
        esperando

        Para isso podemos criar condicionais fazendo as verificações

        Caso alguma não entenda ou um campo obrigatório esteja vazio,
        retornamos uma mensagem ao usuário

        Obs: é possível fazer validações com HTML e também JavaScript
    */


    $validacoes = [];

    if(count($_POST) > 0){

        // Validação do campo nome
        if($_POST['nome'] === ""){

            $validacoes[] = "Por favor preencha o campo nome!";

        } 

        // Validação do campo email
        if($_POST['email'] === ""){

            $validacoes[] = "Por favor preencha o campo email!";

        } 

        // Validação de senha!
        if($_POST['senha'] != $_POST['confirmacao']){

            $validacoes[] = "Senhas não coincidem.";

        }

    }

    echo "Informções enviadas via POST";
    echo "<pre>";
        print_r($_POST);
    echo "</pre>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Validação de formulário</title>
</head>
<body>

    <?php  if(count($validacoes)):?>
        <ul>
            <?php foreach($validacoes as $validacao): ?>
               <li>
                    <?= $validacao; ?>
               </li> 
            <?php endforeach;?>
        </ul>
    <?php endif; ?>

    <fieldset>
        <legend>Validação de formulário</legend>
        <form action="index.php" method="POST">
            <div>
                <input type="text" name="nome" placeholder="Nome:"/>
            </div>
            <br>
            <div>
                <input type="text" name="email" placeholder="E-mail:"/>
            </div>
            <br>
            <div>
                <input type="password" name="senha" placeholder="Senha:"/>
            </div>
            <br>
            <div>
                <input type="password" name="confirmacao" placeholder="Confirme sua senha:"/>
            </div>
            <br>
            <div>
                <input type="submit" value="Enviar"/>
            </div>
         </form>
    </fieldset>
    
</body>
</html>
