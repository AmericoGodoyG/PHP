<?php 
    function calcularDesconto($valorProduto, $categoria) {

        switch($categoria) {
            case "eletrônicos":
                $valorProduto = ($valorProduto * 0.90);
                return "Valor do produto com desconto de 10% é R$ $valorProduto";
                break;
            
            case "vestuário":
                $valorProduto =  ($valorProduto * 0.80);
                return "Valor do produto com desconto de 20% é R$ $valorProduto";
                break;
            
            case "alimentos":
                $valorProduto =  ($valorProduto * 0.95);
                return "Valor do produto com desconto de 5% é R$ $valorProduto";
                break;
            
            default:
                return "Nenhum deconto";
        }  

    }

    echo calcularDesconto(100, "vestuário");
?>