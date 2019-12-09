<?php

class TotalVoice_API {
    private $key = null;
    private $httpRequisicao = null;

    public function __construct($key = null, $httpRequisicao = null) {
        if (!empty($key)) $this->key = $key;
        if (!empty($httpRequisicao)) $this->httpRequisicao = $httpRequisicao;
    }

    public function audio($number) {

        //Define os dados de cabeçalho da requisição
        $cabecalho = array(
            'Content-Type: application/json',
            'Access-Token:  ' . $this->key
        );

        //Define a URL para consumo do serviço
        $url = 'https://api.totalvoice.com.br/audio';

        //Configura o conteúdo a ser enviado
        $conteudo = '{"numero_destino":"'. $number .'","url_audio":"https://github.com/haskellcamargo/gemidao-do-zap/raw/master/resources/gemidao.mp3","resposta_usuario":false,"gravar_audio":false,"bina":"","detecta_caixa":false}';

        try{
            //Inicializa cURL para uma URL.
            $ch = curl_init($url);

            //Marca que vai enviar por POST(1=SIM), caso httpRequisicao seja igual a "POST"
            if ($this->httpRequisicao == 'POST'){
                curl_setopt($ch, CURLOPT_POST, 1);
            
                //Passa o conteúdo para o campo de envio por POST
                curl_setopt($ch, CURLOPT_POSTFIELDS, $conteudo);
            }

            if ($this->httpRequisicao == 'GET') {
                curl_setopt($ch, CURLOPT_HTTPGET, 1);
            }

            //Se foi passado como parâmetro, adiciona o cabeçalho à requisição
            if (!empty($cabecalho)) {
                curl_setopt($ch, CURLOPT_HTTPHEADER, $cabecalho);
            }

            //Marca que vai receber string
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

            /*
            Caso você não receba retorno da API, pode estar com problema de SSL.
            Remova o comentário da linha abaixo para desabilitar a verificação.
            */

            //curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

            //Inicia a conexão
            $resposta = curl_exec($ch);

            //Fecha a conexão
            curl_close($ch);

        }catch(Exception $e){
            return $e->getMessage();
        }

        return $resposta;
    }

}
?>