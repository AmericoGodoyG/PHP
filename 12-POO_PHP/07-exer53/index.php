<?php 

    class Cachorro{

        // Métodos
        function latir() {

            echo "Latindo <br>";

        }

        function andar() {

            echo "Andando <br>";

        }

    }

    $cachorroUm = new Cachorro;
    $cachorroUm->latir();

    $cachorroDois = new Cachorro;
    $cachorroDois->andar();
?>