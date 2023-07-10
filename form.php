<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form method="post">
        <select name="name" id="name">
            <option value="Gustavo" <?php if(isset($_POST['name']) && $_POST['name'] == 'Gustavo') echo 'selected';?>>Gustavo</option>
            <option value="João" <?php if(isset($_POST['name']) && $_POST['name'] == 'João') echo 'selected';?>>João</option>
            <option value="Maria" <?php if(isset($_POST['name']) && $_POST['name'] == 'Maria') echo 'selected';?>>Maria</option>
        </select>
        <input type="submit" name="submit" value="Enviar" />
    </form>

    <?php
        if(isset($_POST['submit'])) {
            echo "seu nome é " . $_POST['name'];
        }
    ?>

    <!-- <form method="post">
        <input type="text" name="name" />
        <input type="text" name="email" />
        <input type="submit" name="submit" value="Enviar" />
    </form> -->
</body>
</html>