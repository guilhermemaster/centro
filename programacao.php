<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta name="author" content="Guilherme" />
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="img/style.css" type="text/css" />
	<title>Centro Esp&iacute;rita Caridade e F&eacute;</title>
</head>
<body>
	<div class="content">
	
			<div class="preheader">
				<div class="padding">
					<!--<a href="#">About</a>&nbsp;-->
					<!--<a href="#">Contact</a>-->
				</div>
			</div>
		
			<div class="header">
				<div class="title"></div>
				<div class="slogan"></div>
			</div>
	
					
			<div id="nav">
			  	<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="palestras.php">Palestras</a></li>
					<li><a href="programacao.php">Programaçao</a></li>
					<li><a href="#">Mocidade Espírita</a></li>
      				<li><a href="#">Fotos</a></li><!--id="current"-->
      				<li><a href="novidades.php">Novidades</a></li>
                         			</ul>
			</div>
		
			<div class="main_content">
				<div class="sd_right">
					<div class="text_padding">
						<h2>Jornada Espírita de Campo Maior</h2>A Jornada Espírita acontecera nos dias 8, 9 e 10 de Agosto no Centro Espírita Caridade e Fé.
						<br />
						
						<br />
						<h2>Outros</h2>
						<a href="#">........</a><br />
						<a href="#">........</a><br />
						<br />
						<h2>Outros</h2>
						<a href="#">.......</a><br />
						<a href="#">.......</a><br />
					</div>
				</div>
			
				<div class="sd_left">
					<div class="text_padding">	
					<?php
						include_once "conexao.php";

					
					
					$sql="SELECT * FROM 	Programacao";
					$resultado = mysql_query($sql) or die ("Não é possivel realiza a consuta");
					if(@mysql_num_rows($resultado)==0) die ("Nenhum registro encontrado");
					
					while($linha=mysql_fetch_array($resultado)) {
print "<p>Data: ".$linha['data']."&nbsp;
 		Horário:".$linha['horario']."&nbsp;
 		Descrição: ".$linha['Descricao']."</p><br/>";
					
					
					}
					
     				      
					?>
					</div>
				</div>
	
				<div class="footer">
					<div class="padding">
						Powered by <a href="http://snews.solucija.com" title="Single file CSS and XHTML valid CMS">sNews</a>	
						| &copy; Copyright BinaryNews Template :: Design: <a href="http://www.free-css-templates.com/" title="Free CSS Templates">David Herreman</a>
						| <a href="rss/">RSS Feed</a> | <a href="#">CSS</a> and <a href="#">XHTML</a>  | <a href="#">Login</a>
					</div>
				</div>
			</div>
	</div>
	
</body>
</html>
