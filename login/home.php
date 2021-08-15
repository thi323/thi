<?php
//conexao
require_once 'conexao.php';

//sessao
session_start();

//validaçao para ver se ja fez o login
if(!isset($_SESSION['login'])):
    header('Location: index.php');
endif;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    
    <title>Página restrita</title>
</head>
<body>
    <h1>Logado com sucesso</h1>
    <p><strong>Olá</strong> <?php echo $_SESSION['login'];?></p><br>
    <a href="logout.php">fazer logout</a>
    <h2>MUITO IMPORTANTE!!!!</h2>
    <p>sempre aparte em <strong>logout</strong> pois ele fecha a sessão de login, se você não fecha, a sessão fica aberta.</p>
</body>
</html>