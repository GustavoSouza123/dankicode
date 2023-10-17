<?php
    $pdo = new PDO('mysql:host=localhost;dbname=dankicode_db', 'root', '');
    
    $sql = $pdo->prepare("SELECT * FROM `clientes` RIGHT JOIN `cargos` ON `clientes`.`cargo` = `cargos`.`id`");
    $sql->execute();
    $data = $sql->fetchAll();
    foreach ($data as $key => $value) {
        echo $value['nome']." => ".$value['nome_cargo'];
        echo "<br>";
    }
?>