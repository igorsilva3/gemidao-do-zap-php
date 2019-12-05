<?php
    //Faz o include da classe TotalVoice_API
    require_once 'modules/API.php';

    //Faz o include da variavel global API-TOKEN
    require_once 'inc/config.php';
        
    //Cria um novo objeto da classe
    $Comunicacao = new TotalVoice_API(API_TOKEN);

    $phone = $_POST['telefone'];

    echo $Comunicacao->key;
        
    //Faz a chamada da função, passando os parâmetros
    $resposta = $Comunicacao->configuration($phone);
        
    //Exibe a resposta da API
    echo $resposta;

?>
