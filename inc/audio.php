<?php
    //Faz o include da classe TotalVoice_API
    require_once '../modules/API-AUDIO.php';

    //Faz o include da variavel global API-TOKEN
    require_once './config.php';
        
    //Cria um novo objeto da classe
    $Comunicacao = new TotalVoice_API(API_TOKEN, METHOD_SEND);
        
    //Faz a chamada da função, passando os parâmetros
    $resposta = $Comunicacao->audio();
        
    //Exibe a resposta da API
    echo $resposta;
?>
