<?php
    $pdo = new PDO('mysql:host=localhost;dbname=dankicode_db', 'root', '');

    // $sql = $pdo->prepare("SELECT * FROM `clientes` GROUP BY `cargo`");
    // $sql = $pdo->prepare("SELECT * FROM `clientes` ORDER BY `nome` DESC LIMIT 3");
    $sql = $pdo->prepare("SELECT * FROM `clientes` LIMIT 1,3");
    $sql->execute();
    $clientes = $sql->fetchAll();
    foreach ($clientes as $key => $value) {
        echo $value['nome'];
        echo '<hr>';
    }

?>