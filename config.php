<?php
    $user = 'root';
    $pass = '';
    $db = 'onibus';
    $host = 'localhost';
 
    $mysqli = new mysqli($host, $user, $pass, $db);

    if ($mysqli->error) {
        die('Falha ao conectar'. $mysli->error);
    }
?>