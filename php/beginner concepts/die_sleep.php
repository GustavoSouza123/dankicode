<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>die / sleep</title>
</head>
<body>
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
        <label for="name">Nome:</label><br>
        <input type="text" name="name" id="name" /><br><br>
        <input type="submit" value="Enviar" />
    </form>
    <div class="result" style="margin-top: 30px;">
    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        sleep(3);
        $name = $_POST["name"];
        if($name == "gustavo") {
            echo "acesso permitido";
        } else {
            die("acesso negado");
        }
    }
    ?>
    </div>
</body>
</html>