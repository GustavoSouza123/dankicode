<section class="banner">
    <div class="center">
        <div class="banner-imgs">
            <div class="banner-img"><img src="<?php echo INCLUDE_PATH; ?>images/main-slider-img1.jpg" alt="Banner image 1"></div>
            <div class="banner-img"><img src="<?php echo INCLUDE_PATH; ?>images/main-slider-img2.jpg" alt="Banner image 2"></div>
            <div class="banner-img"><img src="<?php echo INCLUDE_PATH; ?>images/main-slider-img3.jpg" alt="Banner image 3"></div>
            <div class="banner-img"><img src="<?php echo INCLUDE_PATH; ?>images/main-slider-img4.jpg" alt="Banner image 4"></div>
            <div class="banner-img"><img src="<?php echo INCLUDE_PATH; ?>images/main-slider-img5.jpg" alt="Banner image 5"></div>
            <div class="banner-img"><img src="<?php echo INCLUDE_PATH; ?>images/main-slider-img6.jpg" alt="Banner image 6"></div>
        </div>
        <div class="opacity"></div>
        <div class="bullets"></div>
        <form action="" method="post">
            <?php
                // sending email using PHPMailer
                $error = '';
                if(isset($_POST['form_home'])) {
                    $email = $_POST['email'];
                    if($email == '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                        $error = 'Insira um e-mail válido';
                    } else {
                        $phpmailer = new Email('sandbox.smtp.mailtrap.io', 'f7cdfe30941438', 'deb2ecd305f70d');
                        $phpmailer->setFrom($email, 'User'); // sender
                        $phpmailer->addAddress('contato@gustavosouza.com', 'Gustavo'); // recipient
                        $phpmailer->formatEmail(array('subject'=>'Novo e-mail cadastrado', 'body'=>$email));
                        $phpmailer->sendMail();
                    }
                }
            ?>
            <h2>Qual o seu melhor e-mail?</h2>
            <input type="email" name="email" placeholder="<?php echo $error; ?>" required /><br>
            <input type="submit" name="form_home" value="Cadastrar" />
        </form>
    </div>
</section>

<section class="about sobre">
    <div class="center">
        <div class="w50">
            <h2>Gustavo Souza</h2>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        </div>
        <div class="w50 image">
            <img class="me" src="<?php echo INCLUDE_PATH; ?>images/profile-photo.jpg" alt="Imagem do Gustavo Souza" />
        </div>
    </div>
</section>

<section class="expertise especialidades">
    <div class="center">
        <h2 class="title">Especialidades</h2>
        <div class="boxes">
            <div class="w33 box">
                <img class="logo" src="<?php echo INCLUDE_PATH; ?>images/html-5.png" alt="HTML5 logo" /> <!-- icon -->
                <h3>HTML5</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
            <div class="w33 box">
                <img class="logo" src="<?php echo INCLUDE_PATH; ?>images/css-3.png" alt="CSS3 logo" /> <!-- icon -->
                <h3>CSS</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
            <div class="w33 box">
                <img class="logo" src="<?php echo INCLUDE_PATH; ?>images/js.png" alt="JavaScript logo" /> <!-- icon -->
                <h3>JavaScript</h3>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
            </div>
        </div>
    </div>
</section>

<section class="services servicos">
    <div class="center">
        <div class="w50">
            <h2 class="title">Depoimentos</h2>
            <div class="comment">
                <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <p class="client">Nome do cliente</p>
            </div>
            <div class="comment">
                <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <p class="client">Nome do cliente</p>
            </div>
            <div class="comment">
                <p class="text">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <p class="client">Nome do cliente</p>
            </div>
        </div>
        <div class="w50">
            <h2 class="title">Serviços</h2>
            <div class="services-list">
                <ul>
                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</li>
                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</li>
                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</li>
                    <li>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</li>
                </ul>
            </div>
        </div>
    </div>
</section>