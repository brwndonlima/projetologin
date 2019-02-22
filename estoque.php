<?php
   session_start();
   if(!isset($_SESSION['id_usuario']))
   {
       header("location: index.php");
       exit;
   }
?>

login feito, <?php  echo $_SESSION['nome'] = $rs['nome']; ?>

<p><a href="financeiro.php"> Finanças</a></p>
<p><a href="index.php"> SAIR</a></p>