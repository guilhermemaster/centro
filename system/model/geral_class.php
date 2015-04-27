<?php
include "config/conectar.php";

/**
 * Classe com os parâmentros geral do sistema, como funções gerais.
 *
 * @package model
 * @author Guilherme Barbosa Lima
 **/
class geralSys{
	/**
	 * Deleção de imagem
	 *
	 * @return void
	 * @author Guilherme Barbosa Lima
	 **/
	function delimg($nome){
		$caminho="../view/img_up/";
	    unlink($caminho.$nome);
	}

	/**
	 * undocumented function
	 *
	 * @return string
	 * @author Guilherme Barbosa Lima
	 **/
	function selectPalestra(){
		$pdo=conectar();
		$selPalestra=$pdo->prepare("select * from palestras");
		$selPalestra->execute();

		return $selPalestra;

	}
} // END class 

?>