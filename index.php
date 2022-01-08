<?php

if(isset($_POST['email']) && !empty($_POST['email'])){

    $primeiro_nome = ($_POST['primeironome']);
    $ultimo_nome = ($_POST['ultimonome']);
    $telefone = ($_POST['telefone']);
    $email = ($_POST['email']);
    $mensagem = ($_POST['mensagem']);


    ini_set( 'display_errors', 1 );
        error_reporting( E_ALL );
        $from = "lupade18@lupadev.com.br";
        $to = "ycvitoria@hotmail.com";
        $subject = "Site Assessoria Previdenciaria";
        $message = "Nome: ".$primeiro_nome ." ".$ultimo_nome ." | Telefone: ".$telefone ." | Mensagem: ". $mensagem;
        $headers = "From: " . $from;
        mail($to,$subject,$message, $headers);
        echo (
            '<div class="alert alert-success fade show text-center">
                Sua mensagem foi enviada! Entraremos em contato o mais brevemente.
            </div>'
        );
}
?>


<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Assessoria Previdenciária</title>
    
    <!-- Adicionando o ícone da barra de endereços -->
    <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
    <!-- Fim, ícone da barra de endereços -->

    <!-- Adicionando o Bootstrap -->
    <link rel="stylesheet" href="/css/bootstrap.css">
    <script src="/js/bootstrap.bundle.js"></script>
    <!-- Fim, Adicionando o Bootstrap -->

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Poppins:wght@300;400;700&display=swap"
        rel="stylesheet">
    <!-- Fim, Google fonts -->

    <!-- Adicionando o Fontawsome -->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <!-- Fim, Adicionando o Fontawsome -->


</head>

<body class="container" style="font-family: 'Poppins', 'Sans'; background-image:url(img/bkg1-2.svg) ">

        <div class="header">
            <div class="row justify-content-center">

                <div class="col-sm-5 p-3 ml-0 text-center align-items-center text-light">
                    <a class="m-0" href="#" class="logo">
                        <img class="img-responsive" src="img/logo-img-branca.png" alt="logo yara couto advocacia">
                    </a>
                    <p class="m-0 p-0">ASSESSORIA PREVIDENCIÁRIA</p>
                    
                </div>
            
                <div class="col-sm-5 pt-5 m-0 text-center text-light align-items-center">
                    <span style="font-size: 1.0rem">
                        <i class="fas fa-phone-alt"></i>
                    </span>
                    (21) 2668 1103 <br>
                    <span style="color: white; font-size: 1.1rem;">
                        <i class="far fa-envelope"></i>
                    </span>
                    ycvitoria@hotmail.com <br>
                    <span style="font-size: 1.2rem">
                        <i class="fab fa-instagram"></i>
                    </span>
                    yaracoutovitoria
                </div>
                
            </div>
        </header>

    </div>

    <section class="row justify-content-center">
        
        <div class="col-sm-5 text-center align-middle">
            <h1 class="px-1 pt-5 pb-2 align-middle" style="color: #fff;
            text-shadow:
                0 0 7px #fff,
                0 0 10px #fff,
                0 0 21px #fff,
                0 0 42px #0fa,
                0 0 82px #0fa,
                0 0 92px #0fa,
                0 0 102px #0fa,
                0 0 151px #0fa;;">VAMOS TE GUIAR ATÉ SUA APOSENTADORIA</h1>
                <!-- <h4 class="p-2" style="color:white">Sua aposentadoria pode estar ao seu alcance. Estaremos ao seu lado.</h4> -->
                <p class="text-left" style="color:white">Atendimento personalizado.</p>
                <p class="text-left" style="color:white">Cada caso tem suas características. Vamos estudar a sua situação.</p>
                <p class="text-left" style="color:white">Vamos conferir todo o histórico da documentação.</p>
                <p class="text-left" style="color:white">Também, vamos acompanhar todo processo e informar nos momentos certos o que fazer.</p>
        </div>

        <div class="col-sm-5 pb-5 pt-3 text-center align-middle" style="color: white">
            <img src="img/foto1.png" style="min-width: 16rem; border-radius: 4rem; 
                width: 150px;
                -webkit-filter: drop-shadow(5px 5px 5px rgb(243, 216, 182));
                filter: drop-shadow(5px 5px 5px rgb(243, 216, 182));
            " alt="imagem família">

        </div>

    </section>

    <section class="row mt-5 mb-5 justify-content-around">

        <div class="col-sm-3 mt-5 mb-5 pt-3 pb-5 mx-1 p-3 text-center align-items-center" style="min-width: 8rem; background-color:rgb(0, 255, 221); border-radius: 6rem;">
            <img class="p-2" src="img/ico-calendar.png" style="width: 5rem; color: white;" alt="">
            <h4>Mais 20 anos de experiência em questões previdenciárias.</h4>
        </div>

        <div class="col-sm-3 mt-5 mb-5 pt-3 pb-5 mx-1 p-3 text-center align-items-center" style="background-color:rgb(250, 111, 227); border-radius: 6rem;">
            <img class="p-2" src="img/ico-grafico.png" style="width: 5rem; color: white;" alt="">
            <h4>Mais de 3 mil já se aposentaram conosco.</h4>
        </div>

        <div class="col-sm-3 mt-5 mb-5 pt-3 pb-5 mx-1 p-3 text-center align-items-center" style="background-color:rgb(0, 255, 221); border-radius: 6rem;">
            <img class="p-2" src="img/ico-happy.png" style="width: 5rem; color: white;" alt="">
            <h4>Nosso suporte tornou o processo simples.</h4>
        </div>

    </section>

    <section class="row justify-content-center">

        <div class="col-sm-5 pl-5 pt-5" style="background-color:rgb(181, 255, 245); opacity: 0.9; border-top-left-radius: 6rem;">
            <hr>    
            <h3>Vamos dar o primeiro passo!</h3>
            <p>Envie as informações a seguir e entraremos em contato para iniciar seu atendimento.</p>
            <hr>
            <form class="form" method="POST">
                <div class="row">
                    <div class="col mb-3">
                        <label for="primeiroNome" class="form-label mb-1">Seu primeiro nome</label>
                        <input class="field form-control" type="text" name="primeironome" aria-describedby="primeiro_nome">
                    </div>

                    <div class="col mb-3">
                        <label for="ultimoNome" class="form-label mb-1">Último nome</label>
                        <input type="text" class="field form-control" name="ultimonome" aria-describedby="ultimo_nome">  
                    </div>
                </div>
            

                <div class="row justify-content-center">

                    <div class="col mb-3">
                        <label for="telefone" class="form-label mb-1">Seu telefone</label>
                        <input type="phone" class="field form-control" name="telefone" aria-describedby="telefoneHelp">
                    </div>

                    <div class="col mb-3">
                        <label for="email" class="form-label mb-1">Endereço de email</label>
                        <input type="email" class="field form-control" name="email" aria-describedby="emailHelp">
                    </div>

                </div>
            
                <div class="mb-3">

                    <div class="form-floating">
                        <textarea class="field form-control" name="mensagem" placeholder="Descreva aqui o problema ou resumo da situação"
                            id=""></textarea>
                    </div>
                    <hr>
                    <div class="mb-3 form-check">
                        <div class="form-text text-secondary">Não vamos compartilhar seu número nem fazer ligações
                            inapropriadas.</div>
                            <br>
                        <!-- <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        <label class="form-check-label" for="exampleCheck1">Autorizo o contato por email ou telefone para
                            tratativas do assunto aqui mencionado.</label> -->
                    </div>
                    <button type="submit" class="field btn btn-primary mx-auto" style="width: 30vw;">Enviar</button>
                </div>
            </form>

        </div>

        <div class="col-sm-5 pt-5" style="background-color:rgb(181, 255, 245); opacity: 0.9; border-top-right-radius: 6rem;">
            
            <div class="col-sm-5 pb-5 pt-3 text-center align-middle" style="color: white">
                <img src="img/foto3.png" style="min-width: 24rem; border-radius: 2rem; 
                    width: 150px;
                " alt="imagem descanso na praia">
    
            </div>
        </div>
        
    </section>

    </div>

    <footer class="row justify-content-center" style="height: 15vh;">
        <div class="col-sm-5 pt-5 px-4 text-center" style="background-color: rgb(181, 255, 245); opacity: 0.9">Nossa localização
            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d496.33576430101806!2d-43.45032522994235!3d-22.75830614467084!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spt-BR!2sbr!4v1638386326048!5m2!1spt-BR!2sbr" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
        </div>
        <div class="col-sm-5 pt-5 text-center" style="background-color: rgb(181, 255, 245); opacity: 0.9">
            <br>
            <h4>Assessoria Previdenciária</h4>
            Rua Otávio Tarquino, 209, sala 204<br>
            Centro, Nova Iguaçu, RJ - CEP 26.210-171<br>
            <a href="tel: 21-2668-1103">Telefone: (21) 2668-1103</a>
        </div>
    </footer>

</body>

</html>