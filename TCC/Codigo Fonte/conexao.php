<?php
    header("charset=utf-8");
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "charffbd";
    // Conecta-se ao banco de dados MySQL
    $mysqli = new mysqli($servidor, $usuario, $senha, $banco);
    //definindo acentuação no banco
    $mysqli->set_charset("utf8");
?>