<?php
include('conexao.php');

//if isset(se existir) confere se existe a variável email e senha

if(isset($_POST['email']) || isset($_POST['senha'])) {

    // strlen -> quantidade de caracteres. if para verificar se o email e senha está vazio
    if(strlen($_POST['email']) == 0) {
        echo "Preencha seu e-mail";
    } else if(strlen($_POST['senha']) == 0) {
        echo "Preencha sua senha";
    } else {

    // funcao do mysqli - real_escape_string limpa a string que está no email e senha, evitando com 
    // que hackers acessem essa senha, deixando o banco menos vunerável.

        $email = $mysqli->real_escape_string($_POST['email']);
        $senha = $mysqli->real_escape_string($_POST['senha']);

        // selecao dos campos da tabela de login 
        $sql_code = "SELECT * FROM Usuário WHERE email = '$email' AND senha = '$senha'";
        // se der falha o codigo vai morrer e vai exibir a mensagem dee falha na execucao...
        $sql_query = $mysqli->query($sql_code) or die("Falha na execução do código SQL: " . $mysqli->error);

        // se a quantidade de registros for 1, ele vai retornar quantas linhas essa consulta retornou
        $quantidade = $sql_query->num_rows;

        // verificar se a quantidade de registros eh 1
        if($quantidade == 1) {
            
            // pegando os dados do sql e jogando pra variável de usuario
            $usuario = $sql_query->fetch_assoc();
            
            // criar uma sessao. caso ela nao exista uma nova sessao sera criada
            if(!isset($_SESSION)) {
                session_start();
            }

            // salvando o id e nome na session
            // a sessioini faz com que o dado do usuario fique grava mesmo que o usuario troque de pagina
            // essa informacao pode ficar gravada por algo em torno de 1 semanas
            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            // redireciona o usuario para a pagina inicial do site 
            header("Location: ../html/index.html");

        } else {
            header("Location: ../html/loginUsuario.html?erro=1");
        }

    }

}
?>