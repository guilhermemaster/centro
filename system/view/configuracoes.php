<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

   
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


  </head>
  <body>
      <div class="conteiner">
        
           

           <div class=" paneldeful panel panel-default">
            <div class="panel-heading">
              <h3 class="panel-title">Configurações de Usuário</h3>
            </div>
            <?php
              /*
                Criado em: 01/03/2015
                Autor: Guilherme Barbosa Lima
                Finalidade: Partes do sistema G_Index v2.0.0
              */
              include_once "../model/config/configuration_ge.php";

              session_start("administracao");

              $sql="SELECT * FROM configuracoes where idConfiguracoes=".$_SESSION["id"];
              $resultado = mysql_query($sql) or die ("Não é possivel realiza a consuta");
              if(@mysql_num_rows($resultado)==0) die ("Nenhum registro encontrado");
          
              while($linha=mysql_fetch_array($resultado)) {
                    $nome=$linha['nome'];
                    $email=$linha['email'];
                    $senha=$linha['senha'];
              }
      

          
            ?>

            <div class=" panel-body ">
              <form action="configuracoes.php" method="post">
              
                <div class="form-group">
                  <label for="exampleInputEmail1">Nome de Usuário</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Usuário" name="nome" value=<?php print "\"$nome\""; ?>>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="email" class="form-control" id="exampleInputPassword1" placeholder="Email" name="email" value=<?php print "\"$email\""; ?>>
                </div>
              
                <div class="form-group">
                  <label for="exampleInputPassword1">Senha</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Senha" name="senha" value=<?php print "\"$senha\""; ?>>
                </div>
                <input name="modify" type="hidden" value="yes"  />
                <button type="submit" class="btn btn-default">Enviar</button>
              </form>
            </div><!--fim do "panel-body"-->
          


          </div><!--fim do panel-->


       
      </div>
      <?php
      /*
      Criado em: 01/03/2015
      Autor: Guilherme Barbosa Lima
      Finalidade: Partes do sistema G_Index v2.0.0
      */

     // $secao=new configuration_defult;
 
      //session_start("administracao");
     // print $_SESSION['user'];
     //$secao->security();
      //$secao->security_md5($_SESSION['md5'],$_SESSION['user']);



      if($_POST['modify']=='yes'){
        $sql_update="update configuracoes set nome='".$_POST['nome']."', senha='".$_POST['senha']."', email='".$_POST['email']."' where idConfiguracoes=".$_SESSION['id'];
        $secao->executcrud($sql_update);
      }

      ?>



    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
                    