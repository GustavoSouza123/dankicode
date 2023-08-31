<?php
    $to = "gustavoelia7@gmail.com";
    $subject = "Nova mensagem do site!";

    $body = "<html><body>";
    foreach($_POST as $key => $value) {
        $body .= "<p>".$key.": ".$value."</p>";
        $body .= "<hr>";
    }
    $body .= "</body></html>";

    $headers = "From: ".$_POST["email"]."\r\n";
    $headers .= "Reply-To: $to\r\n";
    $headers .= "Return-Path: $to\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    mail($to, $subject, $body, $headers);

    echo "<a href='index.html'>Enviar outro email</a>";
?>