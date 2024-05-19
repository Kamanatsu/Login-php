<?php 
    session_start();
    require_once("config.php");
    require_once("functions.php");

    $nome = $mysqli->real_escape_string($_POST["nome"]);
    $cpf = $mysqli->real_escape_string($_POST["cpf"]);
    $username = $mysqli->real_escape_string($_POST["username"]);
    $senha= $mysqli->real_escape_string($_POST["senha"]);
    $turno = $mysqli->real_escape_string($_POST["turno"]);
    $cidade = $mysqli->real_escape_string($_POST["cidade"]);
    $parada = $mysqli->real_escape_string($_POST["parada"]);
    $subida = $mysqli->real_escape_string($_POST["subida"]);
    
    if(areAllFieldsFilled([$nome,$cpf,$username,$senha,$turno,$cidade,$parada,$subida])){
        
        
        
        #query da busca de dados ja existentes

        #query do cadastro
        $sql_cadastra = "INSERT INTO `cadastro_em_analise`(`nome`,`cpf`, `username`, `senha`, `turno`, `cidade_estuda`, `parada`, `subida`) 
        VALUES ('$nome','$cpf','$username','$senha','$turno','$cidade','$parada','$subida')";
        $sql_query = $mysqli-> query($sql_cadastra) or die("Falha ao executar cod sql: ".$mysqli->error);



        header("Location: cadastro_aluno_sucesso.php");
        exit();
    }else{
        echo"preencha todos os campos";
    }
?>
