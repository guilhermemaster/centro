<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap 101 Template</title>

   
    <link href="../../css/bootstrap.min.css" rel="stylesheet">
    <link href="../../css/style.css" rel="stylesheet">


  </head>
  <body>
      <div class="conteiner">
        <?php
      /*
      Criado em: 31/03/2015
      Autor: Guilherme Barbosa Lima
      Finalidade: Partes do sistema G_Index v2.0.0
      */
      ?>

        <div class="panel panel-default">
          <div class="panel-heading">Editar Home</div>
          <div class="panel-body">
            <div class="row">
             <div class="col-md-12">
                <form method="post" action="../../../controle/controle_geral.php" enctype="multipart/form-data"> 

                
                <?php 
                include "../../../model/geral_class.php";
                $ex=new geralSys();
                $aux=$ex->selectGeral("home");
                $aux->execute();

                        while($linha=$aux->fetch(PDO::FETCH_ASSOC)){

                           $tituloprimario = $linha['tituloprimario'];
                           $textoprimario = $linha['textoprimario'];

                           $titulosecundario = $linha['titulosecundario'];
                           $textosecundario = $linha['textosecundario'];

                           $textolateral1 = $linha['textolateral1'];
                           $textolateral2 = $linha['textolateral2'];
                           $textolateral3 = $linha['textolateral3'];
                        }
                ?>

        

                <div class="form-group">
                  <label for="exampleInputEmail1">Título primário</label>
                  <textarea class="form-control" rows="2" cols="50" name="text1"><?php print $tituloprimario; ?></textarea>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Texto primário </label>
                  <textarea class="form-control" rows="2" cols="50" name="text2"><?php print $textoprimario; ?></textarea>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Título secundário</label>
                  <textarea class="form-control" rows="2" cols="50"  name="text3"><?php print $titulosecundario; ?></textarea>
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Texto secundário</label>
                  <textarea class="form-control" rows="2" cols="50"  name="text4"><?php print $textosecundario; ?></textarea>
                </div>

                 <div class="form-group">
                  <label for="exampleInputEmail1">Texto lateral 1</label>
                  <textarea class="form-control" rows="2" cols="50" name="text5"><?php print $textolateral1; ?></textarea>
                </div>

                 <div class="form-group">
                  <label for="exampleInputEmail1">Texto lateral 2</label>
                  <textarea class="form-control" rows="2" cols="50" name="text6"><?php print $textolateral2; ?></textarea>
                </div>

                 <div class="form-group">
                  <label for="exampleInputEmail1">Texto lateral 3</label>
                  <textarea class="form-control" rows="2" cols="50" name="text7"><?php print $textolateral3; ?></textarea>
                </div>

             
                <input type="hidden" name="editHome" value="ok" />
                <button type="submit" class="btn btn-default">Enviar</button>
               

                  </form> 
                  </div><!--END col-->       
                </div><!--END ROW-->
             </div><!--END CONTEUDO PANEL-->
          </div>
        </div>



      </div><!--end conteiner-->
        




    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
  </body>
</html>
                    