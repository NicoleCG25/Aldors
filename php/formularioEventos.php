<?php
include("conexao.php");

$nomeEvento = $_POST['nomeEvento'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$nomeAdmin = $_POST['nomeAdmin'];
$areaEnsino = $_POST['areaEnsino'];
$categoria = $_POST['categoria'];
$bairro = $_POST['bairro'];
$descricao = $_POST['descricao'];

$sql = "INSERT INTO Evento (NomeEvento, Estado, Cidade, NomeAdministrador, AreaArtistica, Categoria, Bairro, Descricao) 
VALUES ('$nomeEvento', '$estado', '$cidade', '$nomeAdmin', '$areaEnsino', '$categoria', '$bairro', '$descricao')";

if ($conn->query($sql) === TRUE) {
    echo "<h1>Formulário enviado com sucesso!</h1>";
} else {
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
