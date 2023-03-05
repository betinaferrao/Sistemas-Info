<?php
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $dbname = "usuarios";

    $conexao = mysqli_connect($servidor, $usuario, $senha, $dbname);

    if(!$conexao){
        die( "falha ao conectar :(" .mysqli_connect_error());
    }

?>