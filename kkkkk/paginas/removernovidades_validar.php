<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
<link rel="stylesheet" href="../style_paginas/delnovidade.css" type="text/css" />
</head>

<body>
<p align="center"><img src="../img/carregando_azul.gif" alt="" ></p>
<meta http-equiv="refresh" content="3;url=../home.php">
	<?php
$pega=$_GET['remover']; 
		
include_once "../conexao_pagina/conexao_pagina.php";

$sql="DELETE FROM Novidades WHERE idNovidades='$pega' ";
$deleta=mysql_query($sql);


?>


</body>
</html>