<?php

// pagina criada para proteger os dados do banco e garantir que o usuario nao à acesse

// iniciar sessao caso ela nao exista
if(!isset($_SESSION)) {
    session_start();
}
// verificar se o usuario nao tem ID. O script interrompe e mostra uma mensagem 
// informando que o usuário não pode acessar a página porque não está logado e direciona o usuario
// para página inicial. 
if(!isset($_SESSION['id'])) {
    die("Você não pode acessar esta página porque não está logado.<p><a href=\"index.html\">Entrar</a></p>");
}


?> 