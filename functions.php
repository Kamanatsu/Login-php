<?php
function protect_acess() {
    session_start();
    if (!isset($_SESSION['id'])) {
        header("Location: index.php");
        exit();
    }
}

function volta_login(){
    session_start();
    if (isset($_SESSION['id'])) {
        header("Location: painel.php");
    }
}

?>