<?php

	include "../model/crud_classe.php";
	$pl=new palestra();
	$nv=new novidades();
	$pr=new programacao();
	$hm=new home();


	if (!empty($_POST['cadastroPalestra'])){

	
	$pl=new palestra();

	$pl->insert($_POST['dataForm'], $_POST['textForm'], $_POST['timeForm']);

   // header("Location: ../view/paginas/cadastros/cads_palestra.php");
	header( "refresh:1;url=../view/paginas/cadastros/cads_palestra.php" );
	}

	if(!empty($_POST['cadastroNovidades'])){

	

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


	if(!empty($_POST['editEmecam'])){

   
      if(isset($_FILES['imgEmecam'])){
		      date_default_timezone_set("Brazil/East"); //Definindo timezone padrão
		 
		      $ext = strtolower(substr($_FILES['imgEmecam']['name'],-4)); //Pegando extensão do arquivo
		      $new_name = date("Y.m.d-H.i.s") . $ext; //Definindo um novo nome para o arquivo
		      $dir = '../view/img_up/'; //Diretório para uploads

		      $em=new emecam();

			  $em->edit($_POST['tituloForm'], $_POST['textForm'], $new_name);
		 
		      if (move_uploaded_file($_FILES['imgEmecam']['tmp_name'], $dir.$new_name)){
				print  "<SCRIPT>alert (\"Arquivo enviado!\")</SCRIPT>";
				header( "refresh:1;url=../view/paginas/edit/edit_emecam.php" );
				}else{
				print "<SCRIPT>alert (\"Arquivo não enviado!\")</SCRIPT>";
				header( "refresh:1;url=../view/paginas/edit/edit_emecam.php" );
				}
		   }
	}


	if (!empty($_POST['excPalestra'])){
		$pl->delete($_POST['idPalestra']);

		header( "refresh:1;url=../view/paginas/excluir/exc_palestra.php" );

	}



	if (!empty($_POST['excNovidades'])){
		$nv->delete($_POST['idNovidades']);

		header( "refresh:1;url=../view/paginas/excluir/exc_novidades.php" );

	}


	if (!empty($_POST['excProgramacao'])){
		$pr->delete($_POST['idProgramacao']);

		header( "refresh:1;url=../view/paginas/excluir/exc_programacao.php" );

	}

	if (!empty($_POST['editHome'])){
		$hm->edit($_POST['text1'], $_POST['text2'], $_POST['text3'], $_POST['text4'], $_POST['text5'], $_POST['text6'], $_POST['text7'] );

		header( "refresh:1;url=../view/paginas/edit/edit_home.php" );

	}

?>