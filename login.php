<?php
session_start();
require_once 'config.php';

if(isset($_POST["username"])&&isset($_POST["senha"])){
    
    $username = $mysqli->real_escape_string($_POST['username']);
    $senha = $mysqli->real_escape_string($_POST['senha']);

    $sql_code = "SELECT * FROM usuario WHERE username = '$username' AND senha = '$senha'";
    $sql_query = $mysqli-> query($sql_code) or die("Falha ao executar cod sql: ".$mysqli->error);
        
    $quantidade = $sql_query->num_rows;
    if($quantidade ==1){
        $usuario = $sql_query->fetch_assoc();
        if(!isset($_SESSION)){session_start();}
            

        $_SESSION["id"] = $usuario["id"];

        header("Location:painel.php");
    }else{
        echo"Falha ao logar, senha ou username incorretos";
    }
    
    
}
?>