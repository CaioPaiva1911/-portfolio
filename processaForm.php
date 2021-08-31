<?php

    $_REQUEST
    $para = "caiopaiva.cp@hotmail.com,caiowick@hotmail.com";
    $assunto = "Contato pelo site"
    $nome = $_REQUEST['nome'];
    $email = $_REQUEST['email'];
    $telefone = $_REQUEST['telefone'];
    $mensagem = $_REQUEST['textarea'];
    //Centralizar os dados em uma váriavel 
    $corpo = "<b>Mensagem de Contato</b><br><br>";
    $corpo .= "<b>Nome:</b> $nome" ;
    $corpo .= "<br><b>Email:</b> $email" ;
    $corpo .= "<br><b>Telefone:</b> $telefone" ;    
    $corpo .= "<br><b>Mensagem:</b> $mensagem" ;

    $header = "Content-Type: text/html; charset= utf-8\n"
    $header .= "From: $email Reply-to: $email\n";

    //Função PHP para mandar Emails
    @mail($para,$assunto,$corpo,$header);

    header("location:index.html?msg=enviado")
?>