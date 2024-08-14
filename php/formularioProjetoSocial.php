<?php
include("conexao.php");

$nome = $_POST['nome'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$areaArtistica = $_POST['areaArtistica'];
$categoria = $_POST['categoria'];
$nomeAdministrador = $_POST['nomeAdministrador'];
$bairro = $_POST['bairro'];
$descricao = $_POST['descricao'];
$rua = $_POST['rua'];
$telefone = $_POST['telefone'];

echo "Nome: $nome<br>";
echo "Estado: $estado<br>";
echo "Cidade: $cidade<br>";
echo "Bairro: $bairro<br>";
echo "Telefone: $telefone<br>";
echo "Categoria: $categoria<br>";
echo "Descrição: $descricao<br>";

$sql = "INSERT INTO projetoSocial (nome, estado, cidade, areaArtistica, categoria, nomeAdministrador, bairro, descricao, rua, telefone) 
VALUES ('$nome', '$estado', '$cidade', '$areaArtistica', '$categoria', '$nomeAdministrador', '$bairro', '$descricao', '$rua', '$telefone')";
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
