<?php
	if (!empty($_POST['cadastroPalestra'])){
	//header("Location: ../view/paginas/cadastros/cads_palestra.php");
	include "../model/cadastro_classe.php";
	$pl=new palestra();
	$pl->setData($_POST['dataForm']);
	$pl->setHorario($_POST['timeForm']);
	$pl->setDescricao($_POST['textForm']);

	print $pl->getData();
	print $pl->getHorario();
	print $pl->getDescricao();
	}

?>