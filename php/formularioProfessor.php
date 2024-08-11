<?php
include("conexao.php");

// Verifica se a conexão foi estabelecida
if (!$conn) {
    die("Erro na conexão: " . mysqli_connect_error());
}

// Verifica se os dados foram enviados
var_dump($_POST); // Adicione esta linha para depuração

// Coleta os dados do formulário
$nome = $_POST['nome'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$areaEnsino = $_POST['areaEnsino'];
$categoria = $_POST['categoria'];
$bairro = $_POST['bairro'];
$dataNasc = $_POST['dataNasc'];
$descricao = $_POST['descricao'];
$preco = $_POST['preco'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$telefone = $_POST['telefone'];

// Prepara a query SQL para inserir os dados
$sql = "INSERT INTO Professor (Nome, Estado, Cidade, areaEnsino, Categoria, Bairro, DataNasc, Descricao, Preco, Email, Senha, Telefone) 
VALUES ('$nome', '$estado', '$cidade', '$areaEnsino', '$categoria', '$bairro', '$dataNasc', '$descricao', '$preco', '$email', '$senha', '$telefone')";

if ($conn->query($sql) === TRUE) {
    // Redireciona para index.html após sucesso
    header("Location: ../html/index.html");
    exit(); // Garante que o script PHP pare aqui
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
