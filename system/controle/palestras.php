<?php
	if (!empty($_POST['cadastroPalestra'])){

	include "../model/cadastro_classe.php";
	$pl=new palestra();

	$pl->insert($_POST['dataForm'], $_POST['textForm'], $_POST['timeForm']);
    header("Location: ../view/paginas/cadastros/cads_palestra.php");
	}

	if(!empty(cadastroNovidades)){
	include "../model/cadastro_classe.php";
	$pl=new novidades();

	$pl->insert($_POST['dataForm'], $_POST['textForm'], $_POST['timeForm']);
    header("Location: ../view/paginas/cadastros/cads_novidades.php");
	}

?>