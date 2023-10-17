<?php
    $pdo = new PDO('mysql:host=localhost;dbname=mod_dankicode', 'root', '');

    $sql = $pdo->prepare("SELECT * FROM `clientes` WHERE `nome` LIKE '%e%'");
    $sql->execute();
    $nomes = $sql->fetchAll();

    foreach ($nomes as $key => $value) {
        echo $value['nome'];
        echo "<br>";
    }

    /*
    echo "<pre>";
    print_r($nomes);
    echo "</pre>";
    */
?>