<?php
    require_once "functions.php";
    volta_login();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="./node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <form action="login.php" method="POST">
        <div>
            <label for="">usuario</label>
            <input type="text" name="username" value="usuario" required>
        </div>
        <div>
            <label for="">senha</label>
            <input type="password" name="senha" value="1234" required>
        </div>
        <div>
            <button class="btn btn-danger" type="submit">Entrar</button>
            <a href="cadastrar_aluno.php">Cadastrar</a>
        </div>
    </form>
</body>
</html>