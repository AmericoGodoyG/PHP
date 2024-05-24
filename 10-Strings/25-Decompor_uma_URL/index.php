<?php 
    /*
        * * *  Decompor uma URL * * *

        Com a função parse_url podemos decompor uma URL;

        Vamos receber um array com todas as partes que a URL tem;

        Alguns elementos que podem ser retornados são:
        protocolo, host, parâmetros;

    */

    $url = "https://www.google.com";

    $arrayUrl = parse_url($url);

    print_r($arrayUrl);
    echo "<br>";

    // Array associativo
    echo $arrayUrl["host"];
    echo "<br>";

    $url2 = "http://www.horadecodar.com.br/?busca=php";

    $arrayUrl2 = parse_url($url2);
    print_r($arrayUrl2);

    echo "<br>";

?>