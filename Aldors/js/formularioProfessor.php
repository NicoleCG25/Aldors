<?php
include("conexao.php");

$nome = $_POST['nome'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$telefone = $_POST['telefone'];
$areaEnsino = $_POST['areaEnsino'];
$categoria = $_POST['categoria'];
$bairro = $_POST['bairro'];
$dataNasc = $_POST['dataNasc'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO professor (nome, estado, cidade, telefone, areaEnsino, categoria, bairro, data_nasc, descricao, preco, email, senha) 
VALUES ('$nome', '$estado', '$cidade', '$telefone', '$areaEnsino', '$categoria', '$bairro', '$dataNasc', '$descricao', '$preco', '$email', '$senha')";

if ($conn->query($sql) === TRUE) {
    echo "<h1>Formulário enviado com sucesso!</h1>";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
