<?php
    include('../config/config.php');
    $data = array();
    
    // sending email using PHPMailer
    if(isset($_POST['form_name'])) {
        $phpmailer = new Email('sandbox.smtp.mailtrap.io', 'f7cdfe30941438', 'deb2ecd305f70d');
        $nome = (isset($_POST['nome'])) ? $_POST['nome'] : '';
        $email = (isset($_POST['email'])) ? $_POST['email'] : '';
        $telefone = (isset($_POST['telefone'])) ? $_POST['telefone'] : '';
        $mensagem = (isset($_POST['mensagem'])) ? $_POST['mensagem'] : '';
        
        if($_POST['form_name'] == 'home') {
            if($email == '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $data['success'] = false;
            } else {
                $phpmailer->setFrom($email, 'User'); // sender
                $data['success'] = true;
            }
        } else if($_POST['form_name'] == 'contact') {
            if($nome == '' || $email == '' || $telefone == '' || $mensagem == '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $data['success'] = false;
            } else {
                $phpmailer->setFrom($email, $nome); // sender
                $data['success'] = true;
            }
        }

        if($data['success']) {
            $phpmailer->addAddress('contato@gustavosouza.com', 'Gustavo'); // recipient
            $body= '';
            foreach($_POST as $key => $value) {
                if($key != 'form_name') {
                    $body .= ucfirst($key).': '.$value.'<hr>';
                }
            }
            $phpmailer->formatEmail(array('subject'=>'Novo e-mail do site', 'body'=>$body));

            if($phpmailer->sendMail()) {
                $data['success'] = true;
            } else {
                $data['success'] = false;
            }
        }
    }

    die(json_encode($data));
?>