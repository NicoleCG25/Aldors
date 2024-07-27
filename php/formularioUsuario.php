<?php

include("conexao.php");

$Nome = $_POST['Nome'];
$Estado = $_POST['Estado'];
$Cidade = $_POST['Cidade'];
$Bairro = $_POST['Bairro'];
$DataNasc = $_POST['DataNasc'];
$Email = $_POST['Email'];
$Senha = $_POST['Senha'];

// Prepara a declaração SQL
$stmt = $mysqli->prepare("INSERT INTO usuario (Nome, Estado, Cidade, Bairro, DataNasc, Email, Senha) VALUES (?, ?, ?, ?, ?, ?, ?)");
if ($stmt === false) {
    die("Erro na preparação: " . $mysqli->error);
}

// Liga os parâmetros
$stmt->bind_param("sssssss", $Nome, $Estado, $Cidade, $Bairro, $DataNasc, $Email, $Senha);

// Executa a declaração
if ($stmt->execute()) {
    echo "<h1>Formulário enviado com sucesso!</h1>";
} 
    else {
        echo "Erro: " . $stmt->error;
    }

// Fecha a declaração e a conexão
$stmt->close();
$mysqli->close();
?>
