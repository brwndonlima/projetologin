<?php
    require_once './classes/usuarios.php';
    $u = new Usuario;
?>

</<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Projeto Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" media="screen" href="css/estilo.css">
    <script src="main.js"></script>
</head>
<body>
    <div id="corpo-form">
        <h1>Entrar no sistema de Estoque <img src="./imagens/estoqueicon.png" alt="logo" /> </h1>
    <form method="POST">
        <input type="email" placeholder="Email" name="email">
        <input type="password" placeholder="Senha" name="senha">
        <input type="submit" value="Acessar">
    </form>
    <a href="cadastrar.php"> Ainda não é inscrito?<strong> Cadastre-se</strong>
    </div>
<?php
if (isset($_POST['email']))
{
    $email = addslashes($_POST['email']);
    $senha  = addslashes($_POST['senha']);

    //verificar se não tem campo vazio

    if(!empty($email) && !empty($senha))
    {
        $u->conectar("projeto_estoque","localhost","root","");
        if($u->msgErro == "")
        {
            if($u->logar($email,$senha))
            {
                header("location: estoque.php");
            }
            else
            {
                ?>
                <div class="msg-erro">
                Email ou senha incorretos!
                <?php
            }
        }
        else
        {
            echo "Erro ".$u->msgErro;
            
        }
    }
    else
    {
        ?>
        <div class="msg-erro">
        Preencha todos os campos!
        <?php
    }
}
                



?>
</body>
</html>