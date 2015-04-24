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
include_once "../conexao_pagina/conexao_pagina.php";
?>
		<?php
$sql="UPDATE SiteGeral SET TexoPrimario = '".$_GET['text2']."',TextoSecundario='".$_GET['text4']."', TextLateral1='".$_GET['text5']."', TextLateral2='".$_GET['text6']."', TextLateral3='".$_GET['text7']."', Tituloprimario='".$_GET['text1']."', Titulosecundario='".$_GET['text3']."'  
WHERE idInicio = '0'";
					mysql_query($sql);
					//mysql_close($db);
							?>	
</body>
</html>