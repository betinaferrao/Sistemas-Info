<?php

    include("conexao.php");


    $sql = "SELECT * FROM usuarios";
    $resultado = $conexao->query($sql);

    if ($resultado->num_rows > 0) {
        while ($linha = $resultado->fetch_assoc()) {
            echo "Nome: " . $linha["nome"] . "<br>";
            echo "Email: " . $linha["email"] . "<br>";
            echo "Mensagem: " . $linha["mensagem"] . "<br><br>";
        }
    } else {
        echo "Nenhum usuário encontrado.";
    }

    $conexao->close();


?>

<a href="index.php">Voltar</a>