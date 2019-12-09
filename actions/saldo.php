<?php
    //Faz o include da classe TotalVoice_API
    require_once '../modules/API-SALDO.php';

    //Faz o include da variavel global API-TOKEN
    require_once '../inc/config.php';
        
    //Cria um novo objeto da classe
    $Comunicacao = new TotalVoice_API(API_TOKEN, METHOD_CATCH);
        
    //Faz a chamada da função, passando os parâmetros
    $resposta = $Comunicacao->saldo();

    $resultado = json_decode($resposta);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Saldo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="../css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="../index.html">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item active">
                <a class="nav-link" href="../index.html">Home <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="../pages/verification.html">Verificação <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="./saldo.php">Saldo <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="../pages/audio.html">Audio<span class="sr-only">(current)</span></a>
              </li>
            </ul>
        </div>
    </nav>
    
    <div class="content">
        <p class="h4">API - Total Voice</p>
        <div class="row">
            <div class="col-12">
                <p class="h5">Saldo da conta</p>
                <p>R$<span class="badge badge-pill badge-success"><?php echo $resultado->dados->saldo; ?></span></p>
            </div>
        </div>
        <div class="lead">
            <hr>
            <p>By: Igor Silva<br>Sousa-PB.</p>
            <hr>
            <a href="https://www.facebook.com/igorsilva548" class="fa fa-facebook"></a>
            <a href="https://twitter.com/igorsilva314" class="fa fa-twitter"></a>
            <a href="https://www.instagram.com/igor_silva.3/" class="fa fa-instagram"></a>
        </div>
    </div>
    
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>

