<?php session_start() ?>
<?php
require_once 'conexao.php';
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php

    if(!isset($_SESSION['login'])){
        include('login.php');
        if(isset($_POST['acao'])) {
            $erros = array();
            $login = mysqli_escape_string($conexao, $_POST['login']);
            $senha = mysqli_escape_string($conexao, $_POST['senha']);
            
            //sistema de erro de campo não preenchido
            if(empty($login) or empty($senha)):
                $erros[] = "<li> o campo senha e login devem estar preenchidos! </li>";
            else:
                //sistema de validação de usuário existente
                $sql = "SELECT usuario FROM usuario WHERE usuario = '$login'";
                $resultado = mysqli_query($conexao, $sql);
                

                if(mysqli_num_rows($resultado) > 0):
                    //sistema de validação de usuário e senha corretos
                    $sql = "SELECT usuario FROM usuario WHERE usuario = '$login' AND senha = md5('{$senha}')";
                    $resultado = mysqli_query($conexao, $sql);
                    
                        
                        if(mysqli_num_rows($resultado) == 1):
                            $dados = mysqli_fetch_array($resultado);
                            $_SESSION['login'] = $login;
                            $_SESSION['id_usuario'] = $dados['usuario_id'];
                            header('Location: home.php');
                        else:
                            $erros[] = "<li>usuário ou senha incorretos</li>";
                        endif;
                else:
                    $erros[] = "<li>usuário inexistente</li>";
                
                endif;
            endif;
            if(!empty($erros)):
                foreach($erros as $erro):
                    echo $erro;
                endforeach;
            endif;
            
        }  
    }else{
        include('home.php');
    }
    $conexao->close();
    ?>
    <a href="cadastro.php">Não é cadastrado? Clique aqui e se cadastre!</a>
</body>
</html>