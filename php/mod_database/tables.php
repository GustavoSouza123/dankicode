<?php
    define('HOST', 'localhost');
    define('DB', 'mod_dankicode');
    define('USER', 'root');
    define('PASS', '');
    
    $pdo = new PDO('mysql:host='.HOST.';dbname='.DB, USER, PASS);

    // printing all the tables in the mod_dankicode database
    $tables = $pdo->query("SHOW TABLES");
    $tables = $tables->fetchAll();

    echo "<b>tables in ".DB."</b>";
    foreach ($tables as $key => $value) {
        echo "<br>";
        echo $value[0];
    }

    /*
    echo "<pre>";
    print_r($tables);
    echo "</pre>";
    */

    // creating table using PHP
    $sql = "CREATE TABLE IF NOT EXISTS `tb_teste` (
        id INT AUTO_INCREMENT PRIMARY KEY,
        nome VARCHAR(30) NOT NULL,
        email VARCHAR(50)
    )";

    $pdo->exec($sql);
?>