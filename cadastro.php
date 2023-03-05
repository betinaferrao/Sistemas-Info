<?php

    include("conexao.php");

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $mensagem = $_POST['mensagem'];

    $sql="INSERT INTO usuarios(nome, email, mensagem)
    VALUES ('$nome', '$email', '$mensagem')";

    if(mysqli_query($conexao, $sql)){
        echo "Usuário cadastrado com sucesso";
    }
    else {
        echo "Erro".mysqli_connect_error($conexao);
    }


    mysqli_close($conexao);
    header("Location: index.php");
    exit;


?>