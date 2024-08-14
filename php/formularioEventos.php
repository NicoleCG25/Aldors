<?php
include("conexao.php");

$nomeEvento = $_POST['nomeEvento'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$bairro = $_POST['bairro'];
$rua = $_POST['rua'];
$telefone = $_POST['telefone'];
$nomeAdmin = $_POST['nomeAdmin'];
$areaEnsino = $_POST['areaEnsino'];
$categoria = $_POST['categoria'];
$descricao = $_POST['descricao'];

// Para verificar se os dados estão sendo capturados corretamente
echo "Nome do Evento: $nomeEvento<br>";
echo "Estado: $estado<br>";
echo "Cidade: $cidade<br>";
echo "Bairro: $bairro<br>";
echo "Rua: $rua<br>";
echo "Telefone: $telefone<br>";
echo "Nome do Administrador: $nomeAdmin<br>";
echo "Área de Ensino: $areaEnsino<br>";
echo "Categoria: $categoria<br>";
echo "Descrição: $descricao<br>";

// Teste o SQL para ver se está correto
$sql = "INSERT INTO Evento (nomeEvento, Estado, Cidade, Bairro, Rua, Telefone, nomeAdministrador, areaArtistica, Categoria, Descricao) 
VALUES ('$nomeEvento', '$estado', '$cidade', '$bairro', '$rua', '$telefone', '$nomeAdmin', '$areaEnsino', '$categoria', '$descricao')";
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
