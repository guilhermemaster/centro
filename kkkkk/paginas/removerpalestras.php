<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title></title>
<link rel="stylesheet" href="../style_paginas/delpalestra.css" type="text/css" />
</head>
<body>


<?php
 
include_once "../conexao_pagina/conexao_pagina.php";

$sql="SELECT * FROM Palestras ORDER BY idpalestras ";


$resultado = mysql_query($sql) or die ("Não é possivel realiza a consuta");
if(@mysql_num_rows($resultado)==0) die ("Nenhum registro encontrado");
print "Deletar: &nbsp;&nbsp;&nbsp; Descrição da Palestras <br>";
while($linha=mysql_fetch_array($resultado)) {
print "<a href=\"removerpalestras_validar.php?remover=".$linha['idpalestras']."\" >Deletar</a>";
print "&nbsp; &nbsp; ".$linha['Descricao']." <br>";	
	
	
		}

?>


</body>
</html>


