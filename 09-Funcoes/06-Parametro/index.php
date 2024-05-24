<?php 

    /*
        * * * Função com parãmtro * * *

        Podemos passar parâmetros para a função;

        Estes parâmetros são como variàveis, que 
        são utilizadas dentro da função para moldar
        a sua execução;

        Não há número máximo de parâmtros;

        Sintaxe:

            function teste (param, param2) {
                
                // código

            }

        Ao definir um parâmetro em uma função
        NUNCA esqueça de inserir o parâmetro / argumento
        assim que a função for invocada
    */



    function velocidadeMaxima($vel) {

        if(is_int($vel)) {

            echo "O carro atinge a velocidade máxima de $vel km/h <br>";

        } else {

            echo "Passe um valor do tipo inteiro <br>";

        }

    }

    velocidadeMaxima(200);
    velocidadeMaxima(300);
    velocidadeMaxima(400);

    $velocidade = 125;
    velocidadeMaxima($velocidade);

    // PHP ignora parâmetro desnecessário
    velocidadeMaxima($velocidade, "teste");
    
    // Aceita qualquer tipo de dado como parâmetro.
    velocidadeMaxima ("teste");



    // Definindo uma função com dois parâmetros / argumentos
    function descreverAnimal($nome, $raca) {

        echo "O $nome é da raça $raca <br>";
    
    }

    descreverAnimal("Bob", "vira lata");
    descreverAnimal("Shark", "Pator Alemão");
    
    // Poucos argumentos
    //descreverAnimal("Shark");

?>