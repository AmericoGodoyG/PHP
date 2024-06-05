<?php 
    /*
        * * * Constantes em classes * * *

        As constantes são parecidas com variáveis,
        salvam valores em memória;

        Porém o seu valor não pode ser alterado

        Ex:

            public const CHAVE_API = "ASO793mJJS39";


        Obs: constantes em nomes maiúsculos;

        :: é um símbolo que permite acessoa uma constante,
        uma propriedade estática, ou a um método estático
        de um classe ou a um dos pais dessa classe. 
    */

    class Humano {

        public const OLHOS = 2;
        public const BRACOS = 2;
        public const PERNAS = 2;

        function mostrarConstante() {

            echo self::BRACOS . '<br>';

        }

    }


    $pessoaUm = new Humano;
    
    echo $pessoaUm::OLHOS . '<br>';

    $pessoaUm->mostrarConstante();

?>