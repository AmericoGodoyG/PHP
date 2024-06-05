<?php 

    class Pessoa {

        // Propriedades
        public $nome;
        public $idade;

        // Método
        function andar($m){

            echo "A pessoa andou $m metros <br>";

        }

    }

    // Instanciando os objetos
    $pessoaUm = new Pessoa;
    $pessoaUm->nome = "Américo";
    $pessoaUm->idade = "25";


    $pessoaDois = new Pessoa;
    $pessoaDois->nome = "Bruna";
    $pessoaDois->idade = "22";


    // Exibindo as propriedades nome e idades dos objetos 
    echo "A idade de {$pessoaUm->nome} é de {$pessoaUm->idade} anos. <br>";
    echo "A idade de {$pessoaDois->nome} é de {$pessoaDois->idade} anos. <br>";

    $pessoaDois->andar(20);
?>