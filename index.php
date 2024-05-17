<?php
    include("conexao.php");
    include("redirect.php");


    if(isset($_POST["email"])||isset($_POST["senha"])){
        if(strlen($_POST["email"])== 0){
            echo "Preencha o campo de email";
        }else if(strlen($_POST["senha"])== 0){
            echo "Preencha o campo de senha";
        }else{
            $email = $mysqli->real_escape_string($_POST['email']);
            $senha = $mysqli->real_escape_string($_POST['senha']);

            $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
            $sql_query = $mysqli-> query($sql_code) or die("Falha ao executar cod sql: ".$mysqli->error);
            
            $quantidade = $sql_query->num_rows;
            if($quantidade ==1){
                $usuario = $sql_query->fetch_assoc();
                if(!isset($_SESSION)){session_start();}
                

                $_SESSION["id"] = $usuario["id"];
                $_SESSION["nome"] = $usuario["nome"];

                header("Location:painel.php");
            }else{
                echo"Falha ao logar, senha ou email incorretos";
            }
        
        
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <h1>logar</h1>
    <form action="" method="POST">
        <div>
            <label for="">email</label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="">senha</label>
            <input type="password" name="senha">
        </div>
        <div>
            <button type="submit">Entrar</button>
        </div>
    </form>
</body>
</html>