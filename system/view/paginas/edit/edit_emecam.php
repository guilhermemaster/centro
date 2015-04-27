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
          <div class="panel-heading">Cadastro de Fornecedor</div>
          <div class="panel-body">
            <div class="row">
             <div class="col-md-12">
                <form method="post" action="../../../controle/controle_geral.php" enctype="multipart/form-data"> 

              
                <div class="form-group">
                  <label for="exampleInputEmail1">Título</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Título" name="tituloForm">
                </div>

                <div class="form-group">
                  <label for="exampleInputEmail1">Texto</label>
                  <textarea class="form-control" rows="7" cols="50" placeholder="Descrição" name="textForm"></textarea>
                </div>

                 <div class="form-group">
                  <label for="exampleInputFile">Imagem</label>
                  <input type="file" id="exampleInputFile" name="imgEmecam" size="20">
                 </div>
                <input type="hidden" name="editEmecam" value="ok" />
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
                    