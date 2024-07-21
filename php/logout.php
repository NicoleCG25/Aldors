<?php

// iniciar uma sessao caso ela nao exista

if(!isset($_SESSION)) {
    session_start();
}

// se a sessao existir, ela será destruida, deixando de serem salvas
session_destroy();

// redireciona o usuario para a pagina de login
header("Location: login.php");

