<?php
include("protect.php");
include("conexao.php");

$id = $_SESSION['id'];

$sql = "SELECT nome FROM `usuarios` WHERE id =$id";
$query = mysqli_query($mysqli,$sql);
$dados = mysqli_fetch_object($query);

echo($dados->nome);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peinel</title>
</head>
<body>
    bem vindo ao painel

    <div>
        <a href="logout.php">Sair</a>
    </div>
</body>
</html>