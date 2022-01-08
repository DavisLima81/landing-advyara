<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

$nome = addcslashes($_POST['nome']);
$email = addcslashes($_POST['email']);
$mensagem = addcslashes($_POST['mensagem']);

$to = "contato@lupadev.com.br";
$subject = "Mensagem site Lupadev";
$body = "Nome: ".$nome. "\r\n".
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