<?php
    date_default_timezone_set('America/Sao_Paulo');
    // $pdo = new PDO('mysql:host=localhost;dbname=mod_dankicode', 'root', '');
    $pdo = new PDO('mysql:host=localhost;dbname=form_teste', 'root', '');
    $confirmacao = '';

    if(isset($_POST['cadastrar'])) {
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $momento_registro = date('Y-m-d H:i:s');

        $sql = $pdo->prepare("INSERT INTO `clientes` VALUES (null, ?, ?, ?)");
        if($sql->execute(array($nome, $sobrenome, $momento_registro))) {
            $confirmacao = 'Cliente inserido com sucesso!';
        }
    }
    
    if(isset($_POST['atualizar'])) {
        $id = $_POST['id'];
        $nome = $_POST['nome'];
        $sobrenome = $_POST['sobrenome'];
        $momento_registro = date('Y-m-d H:i:s');

        $sql = $pdo->prepare("UPDATE `clientes` SET nome='$nome', sobrenome='$sobrenome', momento_registro='$momento_registro' WHERE id=?");
        if($sql->execute(array($id))) {
            $confirmacao = 'Cliente atualizado com sucesso!';
        }
    }

    if(isset($_POST['deletar'])) {
        $id = $_POST['id'];

        $sql = $pdo->prepare("DELETE FROM `clientes` WHERE id=?");
        if($sql->execute(array($id))) {
            $confirmacao = 'Cliente deletado com sucesso!';
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
    <div class="confirmacao">
        <?php echo $confirmacao?></div>

    <div class="forms">
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

    <div class="dados">
        <table>
            <?php
            echo "
            <tr>
                <th>id</th>
                <th>nome</th>
                <th>sobrenome</th>
                <th>momento_registro</th>
            </tr>";

            $sql = $pdo->prepare("SELECT * FROM `clientes`");
            $sql->execute();
            $data = $sql->fetchAll();
            foreach ($data as $key => $value) {
                echo "<tr>";
                    echo "<td>".$value['id']."</td>";
                    echo "<td>".$value['nome']."</td>";
                    echo "<td>".$value['sobrenome']."</td>";
                    echo "<td>".$value['momento_registro']."</td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>