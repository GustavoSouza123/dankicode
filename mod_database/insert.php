<?php
    $pdo = new PDO('mysql:host=localhost;dbname=mod_dankicode', 'root', '');

    $sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null, ?, ?, ?)");
    $sql->execute(); // necessário array com os valores a ser inseridos
?>