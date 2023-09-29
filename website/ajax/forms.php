<?php
    include('../config.php');
    $data = array();

    // sending email using PHPMailer
    if(isset($_POST['form_name'])) {
        if($_POST['form_name'] == 'home') {
            $email = $_POST['email'];
            if($email == '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $data['error'] = true;
            } else {
                $phpmailer = new Email('sandbox.smtp.mailtrap.io', 'f7cdfe30941438', 'deb2ecd305f70d');
                $phpmailer->setFrom($email, 'User'); // sender
                $phpmailer->addAddress('contato@gustavosouza.com', 'Gustavo'); // recipient
                $body= '';
                foreach($_POST as $key => $value) {
                    if($key != 'form_contato') {
                        $body .= ucfirst($key).': '.$value.'<hr>';
                    }
                }
                $phpmailer->formatEmail(array('subject'=>'Novo e-mail do site', 'body'=>$body));
                // $phpmailer->sendMail();
                $data['success'] = true;
            }
        } else if($_POST['form_name'] == 'contact') {
            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $mensagem = $_POST['mensagem'];
            if($nome == '' || $email == '' || $telefone == '' || $mensagem == '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $data['error'] = true;
            } else {
                $phpmailer = new Email('sandbox.smtp.mailtrap.io', 'f7cdfe30941438', 'deb2ecd305f70d');
                $phpmailer->setFrom($email, $nome); // sender
                $phpmailer->addAddress('contato@gustavosouza.com', 'Gustavo'); // recipient
                $body= '';
                foreach($_POST as $key => $value) {
                    if($key != 'form_contato') {
                        $body .= ucfirst($key).': '.$value.'<hr>';
                    }
                }
                $phpmailer->formatEmail(array('subject'=>'Novo e-mail do site', 'body'=>$body));
                // $phpmailer->sendMail();
                $data['success'] = true;
            }
        }
    }

    die(json_encode($data));
?>