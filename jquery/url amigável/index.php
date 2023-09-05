<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>My Website</title>
</head>
<body>
    <header>
        <div class="content">
            <div class="logo">My Logo</div>
            <nav>
                <ul>
                    <li><a href="home">Home</a></li>
                    <li><a href="about">About</a></li>
                    <li><a href="projects">Projects</a></li>
                    <li><a href="contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <?php
        if(isset($_GET['url'])) {
            if(file_exists($_GET['url'].'.html')) {
                include($_GET['url'].'.html');
            } else {
                include('404.html');
            }
        } else {
            include('home.html');
        }
    ?>

    <footer>
        <div class="content">
            Copyright: Gustavo Souza, 2023
        </div>
    </footer>

    <script src="../jquery/jquery.js"></script>
    <script src="script.js"></script>
</body>
</html>