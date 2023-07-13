<?php
    $pdo = new PDO('mysql:host=localhost;dbname=mod_dankicode', 'root', '');

    $id = 0;
    $sql = $pdo->prepare("DELETE FROM `clientes` WHERE id=?");
    $sql->execute(array($id));
?>