<?php

    include("conexao.php");

    $nome = $_POST['nome'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $bairro = $_POST['bairro'];
    $dataNasc = $_POST['dataNasc'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $sql = "INSERT INTO usuario (nome, estado, cidade, bairro, data_nasc, email, senha)
    VALUES ('$nome', '$estado', '$cidade', '$bairro', $dataNasc, '$email', '$senha')";

if ($stmt->execute()) {
    echo "<h1>Formulário enviado com sucesso!</h1>";
    
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>