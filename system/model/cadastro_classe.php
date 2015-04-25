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
        function insert($descricao, $url){
            $pdo=conectar();
            $insert=$pdo->prepare("insert into novidades (Descricao, url_img) values (:descricaoGeral, :urlGeral)");
            $insert->bindValue(":descricaoGeral", $descricao, PDO::PARAM_STR);
            $insert->bindValue(":urlGeral", $url, PDO::PARAM_STR);
            $insert->execute();
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

?>