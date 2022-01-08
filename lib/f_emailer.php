<?php

//Variáveis
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
/* $opcoes = $_POST['escolhas']; */
$mensagem = $_POST['mensagem'];
$data_envio = date('d/m/Y');
$hora_envio = date('H:i:s');

if(null !== ($email = $_POST['email']) && !empty($email = $_POST['email'])) {

  //enviar

    // emails para quem será enviado o formulário
    $emailenviar = "contato@lupadev.com.br";
    $destino = $emailenviar;
    $assunto = "Contato pelo Site Lupadev";

    // É necessário indicar que o formato do e-mail é html
    $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        $headers .= 'From: $nome <$email>';
    //$headers .= "Bcc: $EmailPadrao\r\n";

    $enviaremail = mail($destino, $assunto, $arquivo, $headers);
    if($enviaremail){
    $mgm = "E-MAIL ENVIADO COM SUCESSO! <br> O link será enviado para o e-mail fornecido no formulário";
    echo " <meta http-equiv='refresh' content='10;URL=contato.php'>";
    } else {
    $mgm = "ERRO AO ENVIAR E-MAIL!";
    echo "";
    }
  }
?>