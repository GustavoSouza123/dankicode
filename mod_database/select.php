<?php
    $pdo = new PDO('mysql:host=localhost;dbname=mod_dankicode', 'root', '');
    
    // seleciona os posts da respectiva categoria (recebida pela url via metodo GET)
    /*
    $sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = ?");
    $sql->execute(array($_GET['categoria_id']));
    $data = $sql->fetchAll();

    foreach($data as $key => $value) {
        echo "Título: " . $value['titulo'];
        echo "<br>";
        echo "Notícia: " . $value['conteudo'];
        echo "<hr>";
    }
    */

    // seleciona as categorias com seus respectivos posts
    /*
    $sql = $pdo->prepare("SELECT * FROM categorias");
    $sql->execute();
    $data = $sql->fetchAll();

    foreach ($data as $key => $value) {
        $categoria_id = $value['id'];
        echo "<b>Exibindo posts de " . $value['nome'] . "</b>";
        echo "<br>";
        $sql = $pdo->prepare("SELECT * FROM posts WHERE categoria_id = $categoria_id");
        $sql->execute();
        $dataPosts = $sql->fetchAll();
        foreach ($dataPosts as $key => $value) {
            echo "Título: " . $value['titulo'];
            echo "<br>";
            echo "Notícia: " . $value['conteudo'];
            echo "<hr>";
        }
    }
    */

    // seleciona os posts com o id e o nome de suas respectivas categorias

    $sql = $pdo->prepare("SELECT `p`.`id` AS `post_id`, `p`.`titulo`, `p`.`conteudo`, `p`.`categoria_id`, `c`.`nome` FROM `posts` AS `p` INNER JOIN `categorias` AS `c` ON `p`.`categoria_id` = `c`.`id`");
    $sql->execute();
    $data = $sql->fetchAll(PDO::FETCH_ASSOC);

    echo "<pre>";
    print_r($data);
    echo "</pre>";
?>