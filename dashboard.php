<?php
     session_start();
     if(!isset($_SESSION['id_usuario']))
     {
         header("location: index.php");
         exit;
     }

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
</head>
<body>

<br><br>
<p><a href="dashboard.php"> Dashboard</a></p> - <p><a href="financeiro.php"> Finanças</a></p> - 
<p><a href="index.php"> SAIR</a></p>

</body>
</html>