<?php
include("conexao.php");

$nomeprojeto = $_POST['nomeprojeto'];
$nome = $_POST['nome'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$telefone = $_POST['telefone'];
$areaEnsino = $_POST['areaEnsino'];
$categoria = $_POST['categoria'];
$bairro = $_POST['bairro'];
$dataNasc = $_POST['dataNasc'];
$descricao = $_POST['descricao'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO projetoSocial (nomeprojeto, nome, estado, cidade, telefone, areaEnsino, categoria, bairro, data_nasc, descricao, email, senha) 
VALUES ('$nomeprojeto', '$nome', '$estado', '$cidade', '$telefone', '$areaEnsino', '$categoria', '$bairro', '$dataNasc', '$descricao', '$email', '$senha')";

if ($conn->query($sql) === TRUE) {
    echo "<h1>Formulário enviado com sucesso!</h1>";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>