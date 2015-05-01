<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<meta name="author" content="Guilherme" />
	<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
	<link rel="stylesheet" href="img/style.css" type="text/css" />
	<title>Centro Esp&iacute;rita Caridade e F&eacute;</title>
</head>
<body>
	<?php 
	           include "system/model/geral_class.php";
                $ex=new geralSys();
                $aux=$ex->selectGeral("home");
                $aux->execute();

                        while($linha=$aux->fetch(PDO::FETCH_ASSOC)){

                           $tituloprimario = $linha['tituloprimario'];
                           $textoprimario = $linha['textoprimario'];

                           $titulosecundario = $linha['titulosecundario'];
                           $textosecundario = $linha['textosecundario'];

                           $textolateral1 = $linha['textolateral1'];
                           $textolateral2 = $linha['textolateral2'];
                           $textolateral3 = $linha['textolateral3'];
                        }
                ?>


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
					

					
									
						<h2><?php print $textolateral1; ?></h2>
						<br />
						<br />
						<h2><?php print $textolateral2; ?></h2>
						<br />
						<br />
						<h2><?php print $textolateral3; ?></h2>
						<br />
						<br />
						
							
				
					</div>
				</div>
			
				<div class="sd_left">
					<div class="text_padding">	
						<h2><?php print $tituloprimario; ?></h2>
							<?php print $textoprimario; ?>
							<p class=\"date\"></p><br />				

							
                            <h2><?php print $titulosecundario; ?></h2>
							<?php print $textosecundario; ?>
							<p class=\"date\"> </p><br />			
			
					</div>
				</div>
	
				<div class="footer">
					<div class="padding">
					
					</div>
				</div>
			</div>
	</div>
	
</body>
</html>
