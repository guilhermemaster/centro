<!DOCTYPE html>
<html lang="pt">
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
      Criado em: 24/04/2015
      Autor: Guilherme Barbosa Lima
      Finalidade: Partes do sistema G_Index v2.0.0
      */
      ?>

        <div class="panel panel-default">
          <div class="panel-heading">Palestra</div>
          <div class="panel-body">
           
             <form method="post" action="../../../controle/controle_geral.php" enctype="multipart/form-data"> 
<!--
            <div class="form-group">
              <label for="exampleInputEmail1">Data</labl>
              <input type="date" class="form-control" id="exampeleInputEmail1"   name="dataForm">
            </div>

       
            <div class="form-group">
              <label for="exampleInputEmail1">Data</labl>
              <input type="time" class="form-control" id="exampeleInputEmail1"   name="timeForm">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Data</labl>
              <textarea class="form-control" rows="7" cols="50" name="textForm"></textarea>
            </div>
          -->
            


             <div class="form-group">
              <label for="exampleInputEmail1">Data</label>
              <input type="date" class="form-control" id="exampleInputEmail1" name="dataForm">
            </div>
           

          <div class="form-group">
            <label for="exampleInputEmail1">Horário</label>
            <input type="time" class="form-control" id="exampleInputEmail1" name="timeForm">
          </div>

           <div class="form-group">
            <label for="exampleInputEmail1">Descrição</label>
             <textarea class="form-control" rows="7" cols="50" name="textForm"></textarea>
          </div>

        
          <input type="hidden" name="cadastroPalestra" value="ok" />
      

          <button type="submit" class="btn btn-default">Enviar</button>
          </form>



          </div>
        </div>



      </div><!--end conteiner-->
        

<?php
/*
  if (!empty($_POST['cadastroPalestra'])){

    $date = new DateTime($_POST['dataForm']);
    print $date->format('d/m/Y');
    print $date->diff($ourtradata);

  }
  */
?>


    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
  </body>
</html>
                    