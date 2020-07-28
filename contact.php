<?php

if (isset($_POST['email']) && !empty($_POST['email'])) {

    $nome = $_POST['name'];
    $email = $_POST['email'];
    $assunto = $_POST['subject'];
    $msg = $_POST['message'];

    $email = $_POST['email'];

    $to = "jeffersondomingosqueiroz@gmail.com";
    $subject = "Energia Ativa";
    $body = "Nome: " . $nome . "\n";
    "Email: " . $email . "\n";
    "Assunto: " . $subject . "\n";
    "Mensagem: " . $msg . "\n";
    $header = "Location: index.html" . "\r\n"
        . "Reply-To:" . $email . "\e\n"
        . "X=Mailer:PHP/" . phpversion();
    if (mail($to, $subject, $body, $header)) {
        echo ("E-mail enviado com sucesso!");
    } else {
        echo ("O Email não pode ser enviado");
    }
}