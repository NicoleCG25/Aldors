<?php
include("conexao.php");

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

echo "Nome: $nome<br>";
echo "Estado: $estado<br>";
echo "Cidade: $cidade<br>";
echo "Bairro: $bairro<br>";
echo "Telefone: $telefone<br>";
echo "Área de Ensino: $areaEnsino<br>";
echo "Categoria: $categoria<br>";
echo "Descrição: $descricao<br>";

// Prepara a query SQL para inserir os dados
$sql = "INSERT INTO Professor (Nome, Estado, Cidade, areaEnsino, Categoria, Bairro, DataNasc, Descricao, Preco, Email, Senha, Telefone) 
VALUES ('$nome', '$estado', '$cidade', '$areaEnsino', '$categoria', '$bairro', '$dataNasc', '$descricao', '$preco', '$email', '$senha', '$telefone')";


if ($mysqli->query($sql) === TRUE) {
    // Redireciona para index.html após sucesso
    header("Location: ../html/index.html");
    exit(); // Garante que o script PHP pare aqui
} else {
    echo "Erro: " . $sql . "<br>" . $mysqli->error;
}

$mysqli->close();
?>
