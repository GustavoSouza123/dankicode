<?php
    $pdo = new PDO('mysql:host=localhost;dbname=mod_dankicode', 'root', '');

    $sql = $pdo->prepare("SELECT * FROM `posts` GROUP BY `categoria_id` HAVING `titulo` LIKE '%esporte%'");
    $sql->execute();
    $data = $sql->fetchAll();

    echo "<pre>";
    print_r($data);
    echo "</pre>";
?>