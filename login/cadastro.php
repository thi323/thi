<?php
session_start();
include("conexao.php");
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>cadastro</title>
</head>
<body>
    <h1>Cadastro</h1>
    <form method="post">
        usuário: <input type="text" name="usuario"><br>
        senha: <input type="password" name="senha"><br>
        <input type="submit" name="acao" value="Enviar!">
</form>
<?php
    if(isset($_POST['acao'])) {
        $erros = array();
        $usuario = mysqli_escape_string($conexao, trim($_POST['usuario']));
        $senha = mysqli_escape_string($conexao, trim($_POST['senha'])); 
        $sql = "select count(*) as total from usuario where usuario = '$usuario'";
        $resultado = mysqli_query($conexao, $sql);
        $row = mysqli_fetch_assoc($resultado);

        //sistema para verificar se o usuario existe ou não
        if($row['total'] == 1) {
           echo '<li>usuario já existente</li>';
           return false;
        }

        //sistema de erro de campo não preenchido
        if(empty($usuario) or empty($senha)){
            echo '<li>campo usuario e senha devem estar preenchidos</li';
            return false;
        }

        $sql = "INSERT INTO usuario (usuario, senha) VALUES ('$usuario', md5('$senha'))";
       
        if($conexao->query($sql) === TRUE) {
            
            header('Location: index.php');
           
        }
         
        if(!empty($erros)):
            foreach($erros as $erro):
                echo $erro;
            endforeach;
        endif;
        
    }
?>  
</body>
</html>