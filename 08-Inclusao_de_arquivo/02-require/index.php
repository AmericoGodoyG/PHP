<?php
    /*
        * * *   Require   * * *

        Com o require inserimos um arquivo PHP, ou até mesmo HTML em outro;

        Podendo assim, utilizar tudo que está declarado no arquivo incluído;
            - Reaproveitamento de código ou templates.

        O require gera erro fatal se o arquivo não existir, parando o script;
    
        Ex:
            require "arquivo.ext"
    */

    require "teste.php";

?>

<p>Arquivo do include</p>

<?php

    require "arquivos/funcao.php";
    
?>