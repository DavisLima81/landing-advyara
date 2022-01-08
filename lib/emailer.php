<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$primeiro_nome = ($_POST['primeiro_nome']);
$ultimo_nome = ($_POST['ultimo_nome']);
$telefone = ($_POST['telefone']);
$email = ($_POST['email']);
$mensagem = ($_POST['mensagem']);

$to = "contato@lupadev.com.br";
$subject = "Mensagem Site Assessoria Previdenciaria";
$body = "Primeiro_nome: ".$primeiro_nome. "\r\n".
        "Ultimo_nome: ".$ultimo_primeiro_nome. "\r\n".
        "Telefone: ".$telefone. "\r\n".
        "Email: ".$email. "\r\n".
        "Mensagem: ".$mensagem;
$header = "From:lupade18@lupadev.com.br"."\r\n"
        ."Reply-To: ".$email."\r\n"
        ."X-Mailer:PHP/".phpversion();
    if(mail($to,$subject,$body,$header)){
        echo("Email enviado com sucesso!");}

    else{
        echo("O email não pode ser enviado!");
    }
       


}
?>