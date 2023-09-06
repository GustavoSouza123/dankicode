<?php include('config.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- seo -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descrição do meu website">
    <meta name="keywords" content="palavras,chave,do,meu,website">
    
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap">

    <!-- style.css file -->
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/style.css" />
    
    <title>Meu Website</title>
</head>
<body>
    <header>
        <div class="center">
            <div class="logo"><a href="index.php">Logomarca</a></div>
            <nav class="desktop">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Início</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>especialidades">Especialidades</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav>
            <div class="menu-toggle">
                <span></span>
                <span></span>
                <span></span>
            </div>
            <nav class="mobile">
            <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>">Início</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>especialidades">Especialidades</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <section class="banner">
        <div class="center">
            <div class="opacity"></div>
            <form action="" method="">
                <h2>Qual o seu melhor e-mail?</h2>
                <input type="email" name="email" required /><br>
                <input type="submit" name="submit" value="Cadastrar" />
            </form>
        </div>
    </section>
    
    <section class="about">
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

    <section class="expertise">
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

    <section class="services">
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

    <footer>
        <p>Todos os direitos reservados</p>
    </footer>

    <!-- scripts -->
    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script>
    <script src="<?php echo INCLUDE_PATH; ?>js/script.js"></script>
</body>
</html>