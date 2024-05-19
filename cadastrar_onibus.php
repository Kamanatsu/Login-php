<?php
require_once "functions.php";
protect_acess();


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <div>
            <label for="horario">Rota</label>
            <select id="horario" name="horario">
                <option value="manha">Manha</option>
                <option value="tarde">Tarde</option>
                <option value="noite">Noite</option>
                <option value="residente">Residentes</option>
            </select>
        </div>
        <div>
            <label for="">Numero de assentos</label>
            <input type="text">
        </div>

        <div>
            <button type="submit">Cadastrar Onibus</button>
        </div>
    </form>
</body>
</html>