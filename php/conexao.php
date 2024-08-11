<?php
$hostname = "localhost";
$bancodedados = "aldors";
$usuario = "root";
$senha = "";

// Cria a conexão
$mysqli = new mysqli($hostname, $usuario, $senha, $bancodedados);

// Verifica a conexão
if ($mysqli->connect_errno) {
    echo "Falha ao conectar: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
} else {
    echo "Conectado ao Banco de Dados";
}
?>
