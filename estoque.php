<?php
   session_start();
   if(!isset($_SESSION['id_usuario']))
   {
       header("location: index.php");
       exit;
   }
?>

<div>
login feito
<br><br><br>
<a href="index.php"><strong> Sair</strong>
</div>
