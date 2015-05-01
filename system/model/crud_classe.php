<?php
     include "geral_class.php";



   
    /**
     * classe de novidades 
     *
     * @package Model
     * @author Guilherme Barbosa Lima
     **/
    class palestra extends geralSys{
        /**
         * Funções referente a palestra inserção e deleção no BD
         *
         * @return void
         * @author Guilherme Barbosa Lima
         **/
    

    	function insert($data, $descricao, $horario ){
            //include "config/conectar.php";
            //include "geral_class.php";

    		$pdo=conectar();
            $insert=$pdo->prepare("insert into palestras (data, Descricao, horario) value (:data, :descricao, :horario) ");
            $insert->bindValue(":data", $data, PDO::PARAM_STR);
            $insert->bindValue(":descricao", $descricao, PDO::PARAM_STR);
            $insert->bindValue(":horario", $horario, PDO::PARAM_STR);
            $insert->execute();
	   	}

	   	   	function delete($id){
            //include "config/conectar.php";
            //include "geral_class.php";

    		$pdo=conectar();
            $del=$pdo->prepare("delete from palestras where idpalestras=:idRece");
            $del->bindValue(":idRece", $id, PDO::PARAM_INT);
            if ($del->execute()){
            print "<SCRIPT>alert (\"Exclução realizada com sucesso!\")</SCRIPT>";
           }
 	   	}
    }//END class 

    /**
     * classe de novidades 
     *
     * @package Model
     * @author Guilherme Barbosa Lima
     **/
    class novidades extends geralSys{
        /**
         * inserção de novidades no BD.
         *
         * @return void
         * @author Guilherme Barbosa Lima
         **/
        function insert($titulo, $texto){
            //include "config/conectar.php";
           // include "geral_class.php";

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
           // include "config/conectar.php";
           // include "geral_class.php";

            $pdo=conectar();
            $del=$pdo->prepare("delete from novidades where idnovidade=:idRece");
            $del->bindValue(":idRece", $id, PDO::PARAM_INT);
            if ($del->execute()){
            print "<SCRIPT>alert (\"Deletado com sucesso!\")</SCRIPT>";
           } 
        }

    } // END class 

    /**
     * Modificação da tabela programação no BD
     *
     * @package Model
     * @author Guilherme Barbosa Lima
     **/
    class programacao extends geralSys{
        /**
         * Inserção de programação no BD.
         *
         * @return void
         * @author Guilherme Barbosa Lima
         **/
        function insert($data, $horario, $descricao){
            //include "config/conectar.php";
           // include "geral_class.php";

            $pdo=conectar();
            $insert=$pdo->prepare("insert into programacao (horario, data, Descricao) values (:horario, :data, :descricao)");
            $insert->bindValue(":horario", $horario, PDO::PARAM_STR);
            $insert->bindValue(":data", $data, PDO::PARAM_STR);
            $insert->bindValue(":descricao", $descricao, PDO::PARAM_STR);
            if ($insert->execute()){
            print "<SCRIPT>alert (\"Cadastro realizado com sucesso!\")</SCRIPT>";
           }
        }

         /**
         * Deleção uma novidade do BD.
         *
         * @return void
         * @author Guilherme Barbosa Lima
         **/
        function delete($id){
           // include "config/conectar.php";
           // include "geral_class.php";

            $pdo=conectar();
            $del=$pdo->prepare("delete from programacao where idProgramacao=:idRece");
            $del->bindValue(":idRece", $id, PDO::PARAM_INT);
            if ($del->execute()){
            print "<SCRIPT>alert (\"Deletado com sucesso!\")</SCRIPT>";
           } 
        }

    } // END class 

    /**
     * Classe para movimentação de dados do EMECAM
     *
     * @package model
     * @author Guilherme Barbosa Lima
     **/
    class emecam extends geralSys{
        /**
         * alteração dos valores da tabela emecam
         *
         * @return void
         * @author Guilherme Barbosa Lima
         **/
        function edit($titulo, $texto, $img){
           // include "config/conectar.php";
           // include "geral_class.php";

            $general=new geralSys();
            $pdo=conectar();


            $deleteigm=$pdo->prepare("select * from emecam");
            $deleteigm->execute();
            while($linha=$deleteigm->fetch(PDO::FETCH_ASSOC)){
              $general->delimg($linha['url_foto']);  
            }


            


           
            $edit=$pdo->prepare("update emecam set titulo=:titulo, texto=:texto, url_foto=:url where idemecam=1");
            $edit->bindValue(":titulo", $titulo, PDO::PARAM_STR);
            $edit->bindValue(":texto", $texto, PDO::PARAM_STR);
            $edit->bindValue(":url", $img, PDO::PARAM_STR);
    
            if ($edit->execute()){
            print "<SCRIPT>alert (\"Alteração realizada com sucesso!\")</SCRIPT>";
           }
        }
    } // END class 

    /**
     * classe referente a tabela home
     *
     * @package model
     * @author Guilherme Barbosa Lima
     **/
    class home extends geralSys{
        /**
         * undocumented function
         *
         * @return void
         * @author 
         **/
        function edit($titulo_1, $texto_1, $titulo_2, $texto_2, $lateral_1, $lateral_2, $lateral_3){
            $pdo=conectar();
            $edit=$pdo->prepare('update home set tituloprimario=:primeiro, textoprimario=:segundo, titulosecundario=:terceiro, textosecundario=:guarto, textolateral1=:quinto, textolateral2=:sexto, textolateral3=:setimo
            where idhome=1');
            $edit->bindValue(":primeiro", $titulo_1, PDO::PARAM_STR);
            $edit->bindValue(":segundo", $texto_1, PDO::PARAM_STR);
            $edit->bindValue(":terceiro", $titulo_2, PDO::PARAM_STR);
            $edit->bindValue(":guarto", $texto_2, PDO::PARAM_STR);
            $edit->bindValue(":quinto", $lateral_1, PDO::PARAM_STR);
            $edit->bindValue(":sexto", $lateral_2, PDO::PARAM_STR);
            $edit->bindValue(":setimo", $lateral_3, PDO::PARAM_STR);

            $edit->execute();
        }
    } // END class 

    /**
     * classe de configuração da configuração de acesso
     *
     * @package model
     * @author Guilherme Barbosa Lima
     **/
    class configuracao extends geralSys{
        /**
         * undocumented function
         *
         * @return void
         * @author 
         **/
        function updat($nome, $senha, $email, $id){
            $pdo=conectar();
            $edit=$pdo->prepare('update configuracoes set nome=:nome, senha=:senha, email=:email where idConfiguracoes=:id;');
            $edit->bindValue(":nome", $nome, PDO::PARAM_STR);
            $edit->bindValue(":senha", $senha, PDO::PARAM_STR);
            $edit->bindValue(":email", $email, PDO::PARAM_STR);
            $edit->bindValue(":id", $id, PDO::PARAM_INT);
           

            $edit->execute();


        }
    } // END class 


?>