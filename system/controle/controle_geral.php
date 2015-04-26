<?php

	include "../model/cadastro_classe.php";


	if (!empty($_POST['cadastroPalestra'])){

	
	$pl=new palestra();

	$pl->insert($_POST['dataForm'], $_POST['textForm'], $_POST['timeForm']);

   // header("Location: ../view/paginas/cadastros/cads_palestra.php");
	header( "refresh:1;url=../view/paginas/cadastros/cads_palestra.php" );
	}

	if(!empty($_POST['cadastroNovidades'])){
	$nv=new novidades();

	$nv->insert($_POST['tituloForm'], $_POST['textForm']);
    
   // header("Location: ../view/paginas/cadastros/cads_novidades.php");
	header( "refresh:1;url=../view/paginas/cadastros/cads_novidades.php" );
	}


	if(!empty($_POST['cadastroProgramacao'])){
	$pr=new programacao();

	$pr->insert($_POST['dateForm'], $_POST['horaForm'], $_POST['descForm']);
    
   // header("Location: ../view/paginas/cadastros/cads_novidades.php");
	header( "refresh:1;url=../view/paginas/cadastros/cads_programacao.php" );
	}


?>