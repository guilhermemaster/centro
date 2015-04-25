<?php
	include "config/conectar.php";


   

    class palestra{
    	public $data;
    	public $horario;
    	public $descricao;

    	function setData(){
    		$this->data;
    	}

    	function setHorario(){
    		$this->horario;
    	}

    	function setDescricao(){
    		$this->descricao;
    	}



    	function insert(){
    		$pdo=conectar();
	   	}

	   	   	function delete(){
    		$pdo=conectar();
	   	}
    }
	


?>