<?php 

    /*
        * * * Retorno de mútiplos valores * * * 

        Caso seja necessário retornar vários valores em uma função
        podemos formar um array para retorno;
        
        E então acessar os índices de forma isolada com nova variável
        que contém o retorno;

        Ex:
            
            function teste() {

                return["a", 10, true];

            }
    */

    function alteraDados($nome, $idade) {

        $nome = "Sr. $nome";
        $idade = "$idade anos";

        return [$nome, $idade];

    }

    $dados = alteraDados("Américo", 25);

    print_r($dados);

    echo "<br>";

    echo "Olá $dados[0], você tem $dados[1]";

?>