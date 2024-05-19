<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="./node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
    <h1>cadastrar aluno</h1>
    <form action="cadastrar_aluno_action.php" method="POST">
        <div>
            <label for="">Nome Completo</label>
            <input type="text" name="nome">
        </div>

        <div>
            <label for="">cpf</label>
            <input type="number" name="cpf">
        </div>

        <div>
            <label for="">Escolha seu username(sera usado no login)</label>
            <input type="text" name="username">
        </div>

        <div>
            <label for="">Escolha sua senha</label>
            <input type="password" name="senha">
        </div>

        <div>
            <label for="">Repita a senha</label>
            <input type="password" name="senha2">
        </div>

        <div>
            <label for="">Selecione seu turno</label>
            <select id="" name="turno">
                <option value="manha">Manha</option>
                <option value="tarde">Tarde</option>
                <option value="noite">Noite</option>
                <option value="residente">Residentes</option>
            </select>
        </div>

        <div>
            <label for="">Cidade que vc estuda</label>
            <select name="cidade" id="">
                <option value="sobral">Sobral</option>
                <option value="fortaleza">Fortaleza</option>
            </select>
        </div>

        <div>
            <label for="">Parada</label>
            <input type="text" name="parada">
        </div>

        <div>
            <label for="">Subida</label>
            <input type="text" name="subida">
        </div>

        <div>
            <button type="submit">Cadastrar</button>
        </div>
        <!-- <div>
            <label for=""></label>
            <input type="text">
        </div> -->

    </form>
</body>
</html>