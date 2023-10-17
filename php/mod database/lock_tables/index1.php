<?php
    $pdo = new PDO('mysql:host=localhost;dbname=mod_dankicode', 'root', '');

    $pdo->exec("LOCK TABLES `clientes` WRITE");
    sleep(10);
?>