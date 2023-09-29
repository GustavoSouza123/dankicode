<?php include('config.php') ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!-- seo -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Descrição do meu website">
    <meta name="keywords" content="palavras,chave,do,meu,website">
    <link rel="icon" type="image/x-icon" href="<?php echo INCLUDE_PATH; ?>favicon.ico"> <!-- website icon -->
    
    <!-- google fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;1,300;1,400;1,500;1,600;1,700;1,800&display=swap">

    <!-- style.css file -->
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH; ?>css/style.css" />
    
    <title>Meu Website</title>
</head>
<body>
    <?php
        $url = (isset($_GET['url'])) ? $_GET['url'] : 'home';
        if($url == 'sobre' || $url == 'especialidades' || $url == 'servicos') {
            echo '<target target="'.$url.'"></target>';
        }
    ?>

    <!-- include path -->
    <input type="hidden" name="include_path" value="<?php echo INCLUDE_PATH; ?>" />

    <!-- header -->
    <header>
        <div class="center">
            <div class="logo">
                <a href="home">Logomarca</a>
                <!-- <img src="<?php //echo INCLUDE_PATH; ?>images/logo.png" alt="Logo image" /> -->
            </div>
            <nav class="desktop">
                <ul>
                    <li><a href="<?php echo INCLUDE_PATH; ?>home">Início</a></li>
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
                    <li><a href="<?php echo INCLUDE_PATH; ?>home">Início</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>sobre">Sobre</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>especialidades">Especialidades</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>servicos">Serviços</a></li>
                    <li><a href="<?php echo INCLUDE_PATH; ?>contato">Contato</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <?php
        if(file_exists('pages/'.$url.'.php')) {
            include('pages/'.$url.'.php');
        } else {
            if($url != 'sobre' && $url != 'especialidades' && $url != 'servicos') {
                include('pages/404.php');
            } else {
                include('pages/home.php');
            }
        }
    ?>

    <!-- footer -->
    <footer>
        <p>Todos os direitos reservados</p>
    </footer>

    <!-- scripts -->
    <script src="<?php echo INCLUDE_PATH; ?>js/jquery.js"></script> <!-- jQuery -->
    <script src="<?php echo INCLUDE_PATH; ?>js/script.js"></script> <!-- main script -->
    <?php
        if($url == 'contato') {
    ?>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyBtD4YdkDHevlF0iEoBpFGu1cdAslAHJ4s&callback=Function.prototype"></script> <!-- google maps -->
    <script src="<?php echo INCLUDE_PATH; ?>js/map.js"></script> <!-- maps script -->
    <?php } ?>
</body>
</html>