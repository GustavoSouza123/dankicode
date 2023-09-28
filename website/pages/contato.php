<section class="contact">
    <div class="center">
        <div id="map"></div>
        <form action="" method="post">
            <?php
                // sending email using PHPMailer
                $error = '';
                if(isset($_POST['form_contato'])) {
                    $nome = $_POST['nome'];
                    $email = $_POST['email'];
                    $telefone = $_POST['telefone'];
                    $mensagem = $_POST['mensagem'];
                    if($nome == '' || $email == '' || $telefone == '' || $mensagem == '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $error = '* Há campos vazios ou com erro';
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
                        $phpmailer->sendMail();
                    }
                }
            ?>
            <p class="error"><?php echo $error ?></p>
            <input type="text" name="nome" placeholder="Nome" value="<?php if(isset($nome)) echo $nome; ?>" />
            <input type="text" name="email" placeholder="Email" value="<?php if(isset($email)) echo $email; ?>" />
            <input type="text" name="telefone" placeholder="Telefone" value="<?php if(isset($telefone)) echo $telefone; ?>" />
            <textarea name="mensagem" placeholder="Mensagem" value="<?php if(isset($mensagem)) echo $mensagem; ?>"></textarea>
            <input type="submit" name="form_contato" value="Enviar" />
        </form>
    </div>
</section>