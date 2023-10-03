<?php
    $pdo = new PDO('mysql:host=localhost;dbname=mod_dankicode', 'root', '');

    // $sql = $pdo->prepare("SELECT * FROM `clientes` WHERE id IN (2,6)");
    $sql = $pdo->prepare("SELECT * FROM `clientes` WHERE id BETWEEN 1 AND 10");
    $sql->execute();
    $data = $sql->fetchAll();
    
    echo "<pre>";
    echo print_r($data);
    echo "</pre>";
?>