<?php
    date_default_timezone_set('America/Sao_Paulo');
    $pdo = new PDO('mysql:host=localhost;dbname=mod_dankicode', 'root', '');

    if(isset($_POST['cadastrar'])) {
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $momento_registro = date('Y-m-d H:i:s');

        $sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null, ?, ?, ?)");
        $sql->execute(array($nome, $sobrenome, $momento_registro));
    }
    
    if(isset($_POST['atualizar'])) {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $momento_registro = date('Y-m-d H:i:s');

        $sql = $pdo->prepare("UPDATE `clientes` SET nome='$nome', sobrenome='$sobrenome', momento_registro='$momento_registro' WHERE id=$id");
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
            <input type="submit" name="cadastrar" value="Cadastrar" /><br><br>
            <?php if(isset($_POST['cadastrar'])) echo "<script>alert('Cliente inserido com sucesso!')</script>";?>
        </form>

        <form action="" method="post">
            <h2>Modificar Cliente</h2>
            ID: <br><input type="number" name="id" placeholder="Cliente que será atualizado" /><br><br>
            Nome: <br><input type="text" name="nome" required /><br><br>
            Sobrenome: <br><input type="text" name="sobrenome" required /><br><br>
            <input type="submit" name="atualizar" value="Atualizar" /><br><br>
            <?php
                if(isset($_POST['atualizar'])) {
                    if($sql->execute()) echo "<script>alert('Cliente atualizado com sucesso!')</script>";
                }
            ?>
        </form>
    </div>
</body>
</html>