<?php
    date_default_timezone_set('America/Sao_Paulo');
    $pdo = new PDO('mysql:host=localhost;dbname=mod_dankicode', 'root', '');

    if(isset($_POST['cadastrar'])) {
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $momento_registro = date('Y-m-d H:i:s');

        $sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null, ?, ?, ?)");
        if($sql->execute(array($nome, $sobrenome, $momento_registro))) {
            echo "<script>alert('Cliente inserido com sucesso!')</script>";
        }
    }
    
    if(isset($_POST['atualizar'])) {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $momento_registro = date('Y-m-d H:i:s');

        $sql = $pdo->prepare("UPDATE `clientes` SET nome='$nome', sobrenome='$sobrenome', momento_registro='$momento_registro' WHERE id=?");
        if($sql->execute(array($id))) {
            echo "<script>alert('Cliente atualizado com sucesso!')</script>";
        }
    }

    if(isset($_POST['deletar'])) {
        $id = $_POST['id'];

        $sql = $pdo->prepare("DELETE FROM `clientes` WHERE id=?");
        if($sql->execute(array($id))) {
            echo "<script>alert('Cliente deletado com sucesso!')</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
    <title>Cadastro de Clientes</title>
</head>
<body>
    <div class="container">
        <form action="" method="post">
            <h2>Cadastrar Cliente</h2>
            Nome: <br><input type="text" name="nome" required /><br><br>
            Sobrenome: <br><input type="text" name="sobrenome" required /><br><br>
            <input type="submit" name="cadastrar" value="Cadastrar" />
        </form>

        <form action="" method="post">
            <h2>Modificar Cliente</h2>
            ID: <br><input type="number" name="id" placeholder="Cliente que será atualizado" /><br><br>
            Nome: <br><input type="text" name="nome" required /><br><br>
            Sobrenome: <br><input type="text" name="sobrenome" required /><br><br>
            <input type="submit" name="atualizar" value="Atualizar" />
        </form>

        <form action="" method="post">
            <h2>Deletar Cliente</h2>
            ID: <br><input type="number" name="id" placeholder="Cliente que será deletado" /><br><br>
            <input type="submit" name="deletar" value="Deletar" />
        </form>
    </div>
</body>
</html>