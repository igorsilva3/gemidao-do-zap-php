<?php
    //Faz o include da classe TotalVoice_API
    require_once '../modules/API-SALDO.php';

    //Faz o include da variavel global API-TOKEN
    require_once './config.php';
        
    //Cria um novo objeto da classe
    $Comunicacao = new TotalVoice_API(API_TOKEN, METHOD_CATCH);
        
    //Faz a chamada da função, passando os parâmetros
    $resposta = $Comunicacao->saldo();
        
    //Exibe a resposta da API
    echo $resposta;
?>
