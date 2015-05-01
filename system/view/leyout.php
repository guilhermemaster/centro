<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>G_Index V2.0.0</title>

 
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">


  </head>
  <body>




    <div class="container-fluid">
    	
        <div class="row">
        	<div class="col-lg-7 titulo">
            <img src="img_system/logo.png">
          </div>

         
         
          <div class="col-lg-3 titulo">
                         <?php
              session_start("administracao");
              print "Usuário: ".$_SESSION["user"]; 
            ?>

             <div class="col-xs-3 col-md-3">
              <a href="#" class="thumbnail top_deful"><img src="img_system/avatar.png"/></a>
             </div>
          </div>

          <div class="col-lg-2 titulo">

            <form action="leyout.php" method="post">
              <input name="sair" type="hidden" value="exit"  />
             <button type="submit" class="positonbtnsair btn btn-primary ">Sair</button>
            </form>
          </div>

        </div>

    	<div class="row">
        
              	<div class="col-lg-2 submenu">
                    	 <ul class="nav nav-tabs nav-stacked ">
                        <li><a href="#" id="button1"><strong>HOME</strong></a></li>
                        <li><a href="#" id="button2"><strong>CONFIGURAÇÕES</strong></a></li>
                        <li><a href="#" id="button3"><strong>CADASTROS</strong></a></li>
                        <li><a href="#" id="button4"><strong>EDIÇÃO</strong></a></li>
                        <li><a href="#" id="button5"><strong>EXCLUÇÃO</strong></a></li>
                        
                      </ul>
                  </div>
              	
                <div class="col-lg-10 conteudo">
                            <main id="mainContent">
                              <object type='text/html' data="Home.php" width='1000' height='600' ></object>
                            </main>  
                </div>
          </div><!--fim do row-->

                  <div class="row">
                    <div class="col-lg-12 rodape">
                      <p>oi</p>
                   </div>
                 </div><!--rodape-->
      </div><!--fim do conteirner-->

  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/buttons.js"></script>

    <?php
      include_once "../model/security.php";
      $secao=new configuration_defult();

      if ($_POST['sair']=='exit'){
         $secao->destry_sessao();
         print "<meta http-equiv=\"refresh\" content=\"3;url=../../index.php\">";

      }

    //  $secao->security($_SESSION["user"]);
   //   $secao->security_md5($_SESSION['md5'],$_SESSION['user']);
     
      
    ?>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>