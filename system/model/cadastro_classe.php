<?php
	include "config/conectar.php";


   
    /**
     * classe de novidades 
     *
     * @package Model
     * @author Guilherme Barbosa Lima
     **/
    class palestra{
        /**
         * Funções referente a palestra inserção e deleção no BD
         *
         * @return Guilherme Barbosa Lima
         * @author 
         **/
    

    	function insert($data, $descricao, $horario ){
    		$pdo=conectar();
            $insert=$pdo->prepare("insert into palestras (data, Descricao, horario) value (:data, :descricao, :horario) ");
            $insert->bindValue(":data", $data, PDO::PARAM_STR);
            $insert->bindValue(":descricao", $descricao, PDO::PARAM_STR);
            $insert->bindValue(":horario", $horario, PDO::PARAM_STR);
            $insert->execute();
	   	}

	   	   	function delete($id){
    		$pdo=conectar();
            $del=$pdo->prepare("delete from palestras where idpalestras=:idRece");
            $del->bindValue(":idRece", $id, PDO::PARAM_INT);
            $del->execute();
 	   	}
    }//END class 

    /**
     * classe de novidades 
     *
     * @package Model
     * @author Guilherme Barbosa Lima
     **/
    class novidades{
        /**
         * inserção de novidades no BD.
         *
         * @return void
         * @author Guilherme Barbosa Lima
         **/
        function insert($titulo, $texto){
            $pdo=conectar();
            $insert=$pdo->prepare("insert into novidades (titulo, texto) values (:titulo, :texto)");
            $insert->bindValue(":titulo", $titulo, PDO::PARAM_STR);
            $insert->bindValue(":texto", $texto, PDO::PARAM_STR);
           if ($insert->execute()){
            print "<SCRIPT>alert (\"Esta é uma caixa de diálogo ALERT do JavaScript!\")</SCRIPT>";
           }
        } 

        /**
         * Deleção uma novidade do BD.
         *
         * @return void
         * @author Guilherme Barbosa Lima
         **/
        function delete($id){
            $pdo=conectar();
            $del=$pdo->prepare("delete from novidades where idNovidades=:idRece");
            $del->bindValue(":idRece", $id, PDO::PARAM_INT);
            $del->execute(); 
        }

    } // END class 

    /**
     * Modificação da tabela programação no BD
     *
     * @package Model
     * @author Guilherme Barbosa Lima
     **/
    class programacao{
        /**
         * Inserção de programação no BD.
         *
         * @return void
         * @author Guilherme Barbosa Lima
         **/
        function insert($data, $horario, $descricao){
            $pdo=conectar();
            $insert=$pdo->prepare("insert into programacao (horario, data, Descricao) values (:horario, :data, :descricao)");
            $insert->bindValue(":horario", $horario, PDO::PARAM_STR);
            $insert->bindValue(":data", $data, PDO::PARAM_STR);
            $insert->bindValue(":descricao", $descricao, PDO::PARAM_STR);
            if ($insert->execute()){
            print "<SCRIPT>alert (\"Esta é uma caixa de diálogo ALERT do JavaScript!\")</SCRIPT>";
           }
        }

    } // END class 

?>