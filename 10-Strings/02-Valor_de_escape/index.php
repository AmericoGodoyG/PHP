<?php
 /*
    * * *  Valor de escape  * * *
    
    Podemos utilizar alguns valores que 
    executam funções especiais em strings.

    Precisamos utilizar aspas duplas;

    Ex:
        \n = nova linha;
        \t = tab;
        \\ = barra invertida;
        \$ = sinal de dólar;
    
 */

    // Definindo o conteúdo do php como texto puro.
    header("Content-type: text/plain");

    // Pular linha (\n)
    echo "Isso aqui vai ficar na primeira linha \n E isso na segunda linha \n";

    // Tab (\t)
    echo "Testando o tab \t aqui";

    // Barra invetida (\\)
    echo "Barra invertida \\ \n";

    // Sinal de dolar (\$)
    echo "Imprimindo o dolar \$ \n";

?>