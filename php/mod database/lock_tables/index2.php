<?php
    $pdo = new PDO('mysql:host=localhost;dbname=mod_dankicode', 'root', '');

    $sql = $pdo->prepare("SELECT * FROM `clientes`");
    $sql->execute();
    $clientes = $sql->fetchAll();
    foreach ($clientes as $key => $value) {
        echo $value['nome'].' '.$value['sobrenome'];
        echo "<hr>";
    }
?>