<section class="contact">
    <div class="center">
        <div id="map"></div>
        <form action="" method="post">
            <?php
                // sending email using PHPMailer
                $error = '';
                if(isset($_POST['form_contato'])) {
                    $email = $_POST['email'];
                    if($email == '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $error = 'Insira um e-mail válido';
                    } else {
                        $phpmailer = new Email('sandbox.smtp.mailtrap.io', 'f7cdfe30941438', 'deb2ecd305f70d');
                    }
                }
            ?>
            <input type="text" name="nome" placeholder="Nome" />
            <input type="text" name="email" placeholder="<?php if($error != '') echo $error; else echo 'Email'; ?>" />
            <input type="text" name="telefone" placeholder="Telefone" />
            <textarea name="mensagem" placeholder="Mensagem"></textarea>
            <input type="submit" name="form_contato" value="Enviar" />
        </form>
    </div>
</section>