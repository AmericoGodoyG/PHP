<?php 
    /*
        * * * Removendo tags HTML * * * 

        Podemos remover as tags HTML de 
        uma string com a função strip_tags;

        Geralmente para salvar dados no 
        banco de dados removemos as tags.
    */

    $textohtml = "<p>Testando parágrafo.</p> <div>Uma div</div><p>Outro parágrafo</p>";

    echo $textohtml;

    // texto puro.
    $salvarTextoBanco = strip_tags($textohtml);

    echo $salvarTextoBanco;
?>