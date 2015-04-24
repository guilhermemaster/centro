<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Editar Home</title>
<link rel="stylesheet" href="../style_paginas/editarhome.css" type="text/css" />
</head>

<body>
<p>Editar Home </p>
<?php
include_once "../conexao_pagina/conexao_pagina.php";
?>
<?php
	$sql="SELECT * FROM SiteGeral";
					$resultado1 = mysql_query($sql) or die ("Não é possivel realiza a consuta");
					if(@mysql_num_rows($resultado1)==0) die ("Nenhum registro encontrado");
					
					while($linha1=mysql_fetch_array($resultado1)) {

					print"
<form action=\"../paginas/edithome_validar.php\" method=\"get\">
<p>Titutlo primário:<textarea name=\"text1\" rows=\"10\" cols=\"30\" />".$linha1['Tituloprimario']."</textarea></p>
<p>Texto primário:<textarea name=\"text2\" rows=\"10\" cols=\"30\" />".$linha1['TexoPrimario']."</textarea></p>
<p>Título secundario:<textarea name=\"text3\" rows=\"10\" cols=\"30\" />".$linha1['Titulosecundario']."</textarea></p>
<p>Texto secundario:<textarea name=\"text4\" rows=\"10\" cols=\"30\" />".$linha1['TextoSecundario']."</textarea></p>
<p>Texto Lateral 1º:<textarea name=\"text5\" rows=\"10\" cols=\"30\" />".$linha1['TextLateral1']."</textarea></p>
<p>Texto Lateral 2º:<textarea name=\"text6\" rows=\"10\" cols=\"30\" />".$linha1['TextLateral2']."</textarea></p>
<p>Texto Lateral 3º:<textarea name=\"text7\" rows=\"10\" cols=\"30\" />".$linha1['TextLateral3']."</textarea></p>
<input type=\"submit\" />
</form>";
		
					}
							?>	
		

</body>
</html>