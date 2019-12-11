<?php
    //Faz o include da classe TotalVoice_API
    require_once '../modules/API-AUDIO.php';

    //Faz o include da variavel global API-TOKEN
    require_once '../inc/config.php';
        
    //Cria um novo objeto da classe
    $Comunicacao = new TotalVoice_API(API_TOKEN, METHOD_SEND);

    $phone = $_POST['telefone'];
        
    //Faz a chamada da função, passando os parâmetros
    $resposta = $Comunicacao->audio($phone);

    // Transforma o JSON em um objeto
    $resultado = json_decode($resposta);

    echo ("<SCRIPT LANGUAGE='JavaScript'>
        window.alert('". $resultado->mensagem ."')
        window.location.href='../pages/audio.html';
        </SCRIPT>");
?>
