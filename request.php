<?php
    $name = $_POST ['name'];
    $email = $_POST ['email'];
    $message = $_POST ['message'];
    $to = "Tihonova_regina@mail.ru";
    $from = "noreply@reginatihonova.ru";
    $subject = "Сообщение";
    $headers = "From: $email\r\n$name\r\nReply-To: $from\r\nContent-type: text/plain; charset=utf-8\r\n";
    mail ($to, $subject, $message, $headers);
    $redir = $_SERVER ['HTTP_REFERER'];
       if (strpos($redir, "mail=1") === false) $redir .= "?mail=1";
    header("Location: $redir");
?>