<?php
    /*
        * * * Processamento de formulários teoria * * *

        Há duas maneiras de processar formulários: via GET e via POST

        Com o GET vamos processar os parâmetros que vem na query string
        ou seja, na URL
        
        Com o POST vamos processar as informações que vem na requisição,
        estas não aparecem na URL

        Ex:

            Buascas => GET

            GET: O método GET é usado para solicitar dados do servidor. 
            Quando você envia uma solicitação GET, os parâmetros são 
            anexados à URL na forma de uma string de consulta. 
            Isso significa que os dados são visíveis na própria URL.
            O método GET é adequado para solicitações que recuperam dados, 
            como solicitações de pesquisa ou navegação entre páginas. 
            Além disso, como os dados são anexados à URL, há um limite prático 
            na quantidade de dados que podem ser enviados.

            |Ex: http://example.com/script.php?name=John&age=30


            POST: O método POST, por outro lado, envia dados para o servidor 
            no corpo da solicitação HTTP. Isso significa que os dados não são 
            visíveis na URL. O método POST é geralmente usado quando você está
            enviando uma grande quantidade de dados ou dados sensíveis, como 
            informações de formulário que incluem senhas. Além disso, como os 
            dados não são visíveis na URL, o método POST é considerado mais 
            seguro do que o método GET para o envio de informações confidenciais.

            Registro de usuário = POST
            
            |Ex: 
            
                POST /script.php HTTP/1.1
                Host: example.com
                Content-Type: application/x-www-form-urlencoded
                name=John&age=30

        Em resumo, use o método GET para solicitar dados do servidor, 
        especialmente quando os dados podem ser expostos na URL, 
        e use o método POST para enviar dados para o servidor, 
        especialmente quando os dados são sensíveis ou quando você 
        precisa enviar uma grande quantidade de dados.

    */
