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
    <link rel="stylesheet" href="<?php echo INCLUDE_PATH_PANEL; ?>css/style.css" />

    <title>Painel de controle</title>
</head>
<body>
    <div class="container">
        <div class="login-box">
            <h1>Fazer Login</h1>
            <form method="post" action="">
                <input type="text" name="user" placeholder="Usuário" required />
                <input type="password" name="password" placeholder="Senha" required />
                <input type="submit" value="Login" />
            </form>
        </div>
    </div>
</body>
</html>