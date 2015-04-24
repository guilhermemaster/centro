<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
</head>
<body>
<p align="center"><img src="../img/carregando_azul.gif" alt="" ></p>
<meta http-equiv="refresh" content="3;url=../home.php">
<?php
$pega=$_GET['remover']; 
 
include_once "../conexao_pagina/conexao_pagina.php";
$sql="DELETE FROM Programacao WHERE idProgramacao='$pega' ";
$deleta=mysql_query($sql);


?>


</body>
</html>

