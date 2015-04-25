<?php
	if (!empty($_POST['cadastroPalestra'])){
	//header("Location: ../view/paginas/cadastros/cads_palestra.php");
	include "../model/cadastro_classe.php";
	$pl=new palestra();
	$pl->setData($_POST['dataF']);
	print "<script>alert(".$pl->getData().")</script>";
	}

?>