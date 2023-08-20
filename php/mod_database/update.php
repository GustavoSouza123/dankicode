<?php
    $pdo = new PDO('mysql:host=localhost;dbname=mod_dankicode', 'root', '');

    $id = 0;
    $sql = $pdo->prepare("UPDATE `clientes` SET nome=?, sobrenome=? WHERE id=?");
    $sql->execute(array("Clóvis", "Antônio", 20)); // necessário array com os valores a ser inseridos
?>