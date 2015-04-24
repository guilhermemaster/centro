<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Documento sem título</title>
<link rel="stylesheet" href="../style_paginas/delnovidade.css" type="text/css" />
</head>

<body>
	<?php
 
		 
include_once "../conexao_pagina/conexao_pagina.php";


$sql="SELECT * FROM Novidades ORDER BY idNovidades ";


$resultado = mysql_query($sql) or die ("Não é possivel realiza a consuta");
if(@mysql_num_rows($resultado)==0) die ("Nenhum registro encontrado");
print "Deletar: &nbsp;&nbsp;&nbsp; Novidade <br>";
while($linha=mysql_fetch_array($resultado)) {
print "<a href=\"removernovidades_validar.php?remover=".$linha['idNovidades']."\" >Deletar</a>";
print "&nbsp; &nbsp; ".$linha['Descricao']." <br>";	
	
	
		}

?>


</body>
</html>