<?php

class TotalVoice_API {
    private $key = null;

    public function __construct($key = null) {
        $this->key = $key;
    }

    public function configuration($number) {

        //Define os dados de cabeçalho da requisição
        $cabecalho = array(
            'Content-Type: application/json',
            'Access-Token:  ' . $this->key
        );
        
        //Define a URL para consumo do serviço
        $url = 'https://api.totalvoice.com.br/verificacao';

        //Configura o conteúdo a ser enviado
        $conteudo = '{"numero_destino":"$number","nome_produto":"Pornhub","tamanho":"5","tts":false}';

        //Tipo de requisição: POST
        $httpRequisicao = 'POST';

        try{
            //Inicializa cURL para uma URL.
            $ch = curl_init($url);

            //Marca que vai enviar por POST(1=SIM), caso httpRequisicao seja igual a "POST"
            if ($httpRequisicao == 'POST') {
                curl_setopt($ch, CURLOPT_POST, 1);
            
                //Passa o conteúdo para o campo de envio por POST
                curl_setopt($ch, CURLOPT_POSTFIELDS, $conteudo);
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