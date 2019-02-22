<?php
    
    require_once 'classes/usuarios.php';
    $u = new Usuario;

   
?>

</<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Brendolindo</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" media="screen" href="css/estilo.css">
    <script src="main.js"></script>
</head>
<body>
    <div id="corpo-form">
    
    <h1>Cadastrar <img src="./imagens/estoqueicon.png" alt="logo" /></h1>
    <form method="POST">
        <input type="text" name="nome" placeholder="Nome Completo" maxlength="30">
        <input type="text" name="telefone" placeholder="Telefone"maxlength="30">
        <input type="email" name="email" placeholder="E-mail"maxlength="40">
        <input type="password" name="senha" placeholder="Senha"maxlength="15">
        <input type="password" name="confsenha" placeholder="Confirmar Senha"maxlength="15">
        <input type="submit" value="Cadastrar">
    </form>
    </div>
<?php
//verificar se clicou no botao
if (isset($_POST['nome']))
{
    $nome = addslashes($_POST['nome']);
    $telefone = addslashes($_POST['telefone']);
    $email = addslashes($_POST['email']);
    $senha  = addslashes($_POST['senha']);
    $confirmarsenha = addslashes($_POST['confsenha']);

    //verificar se não tem campo vazio

    if(!empty($nome) && !empty($telefone) && !empty($email) && !empty($senha) && !empty($confirmarsenha))
    {
        $u->conectar("projeto_estoque","localhost","root","");
        if($u->msgErro == "") //está td certo
        {
            if($senha == $confirmarsenha)
            {
                if($u->cadastrar($nome,$telefone,$email,$senha))
                {
                    ?>
                    <div id="msg-sucesso">
                    Cadastrado com sucesso!
                    </div>
                    <?php
                }
                else
                {
                    ?>
                    <div class="msg-erro">
                    Email já cadastrado!
                    <?php
                }
            }
            else
            {
                ?>
                <div class="msg-erro">
                As senhas não correspondem!
                <?php
            }
            
        }
        else
        {
            ?>
            <div class="msg-erro">
            "Erro ".$u->msgErro;
            <?php
        }
    }else
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