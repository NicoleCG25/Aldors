<?php
include("conexao.php");

$nome = $_POST['nome'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$dataNasc = $_POST['dataNasc'];
$email = $_POST['email'];
$senha = $_POST['senha'];

echo "Nome: $nome<br>";
echo "Estado: $estado<br>";
echo "Cidade: $cidade<br>";
echo "Bairro: $bairro<br>";

$sql = "INSERT INTO Usuário (nome, estado, cidade, bairro, dataNasc, email, senha)
VALUES ('$nome', '$estado', '$cidade', '$bairro', '$dataNasc', '$email', '$senha')";
echo "SQL: $sql<br>";

if ($mysqli->query($sql) === TRUE) {
    // Redireciona para index.html após sucesso
    header("Location: ../html/index.html");
    exit(); // Garante que o script PHP pare aqui
} else {
    echo "Erro: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
?>