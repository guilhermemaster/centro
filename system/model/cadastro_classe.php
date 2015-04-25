<?php
	include "config/conectar.php";


   

    class palestra{
    	public $data;
    	public $horario;
    	public $descricao;

    	function setData($dataf){
    		$this->data=$dataf;
    	}

    	function setHorario($horariof){
    		$this->horario=$horariof;
    	}

    	function setDescricao($descricaof){
    		$this->descricao=$descricaof;
    	}

    	function getData(){
    		return $this->data;
    	}



    	function insert(){
    		$pdo=conectar();
	   	}

	   	   	function delete(){
    		$pdo=conectar();
	   	}
    }
	


?>