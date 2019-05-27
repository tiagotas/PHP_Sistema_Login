<?php
// Inicia a sessão
session_start();

// Verifico se o usuário está logado, ou seja, se existe a
// variável de sessão autenticado, caso não (!) exista (isset)
// redireciono (header location) para a página de login.
if(!isset($_SESSION['autenticado'])) {
    header("location: form_login.php");
}

// Caso o usuário clique no link sair, destruo a sessão e 
// redireciono para a página de login.
if(isset($_GET['sair'])) {
    session_destroy();
    header("location: form_login.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.php" />
</head>
<body>
    <h1>
        Sou protegido!
        <a href="protegido.php?sair=true">Sair</a>
    </h1>
</body>
</html>