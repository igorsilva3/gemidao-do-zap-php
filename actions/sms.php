<?php
    //Faz o include da classe TotalVoice_API
    require_once '../modules/API-VERIFICACAO.php';

    //Faz o include da variavel global API-TOKEN
    require_once '../inc/config.php';
        
    //Cria um novo objeto da classe
    $Comunicacao = new TotalVoice_API(API_TOKEN, METHOD_SEND);

    $phone = $_POST['telefone'];
        
    //Faz a chamada da função, passando os parâmetros
    $resposta = $Comunicacao->verification($phone);

    echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('Sucesso!')
        window.location.href='../pages/verification.html';
        </SCRIPT>");
        
    //Exibe a resposta da API
    echo $resposta;

?>
