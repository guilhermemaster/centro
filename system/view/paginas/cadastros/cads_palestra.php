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
           
             <form method="post" action="cads_palestra.php" enctype="multipart/form-data"> 

            <div class="form-group">
              <label for="exampleInputEmail1">Email address</labl>
              <input type="date" class="form-control" id="exampeleInputEmail1" placeholder="Enter email"  name="e">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="r">
            </div>
<!--
             <div class="form-group">
              <label for="exampleInputEmail1">Data</label>
              <input type="date" class="form-control" id="exampleInputEmail1" name="dataF">
            </div>
           

          <div class="form-group">
            <label for="exampleInputEmail1">Horário</label>
            <input type="time" class="form-control" id="exampleInputEmail1" name="horario">
          </div>

           <div class="form-group">
            <label for="exampleInputEmail1">Descrição</label>
            <input type="text" class="form-control" id="exampleInputEmail1" name="texto">
          </div>

        -->
          <input type="hidden" name="cadastroPalestra" value="ok" />
      

          <button type="submit" class="btn btn-default">Enviar</button>
          </form>



          </div>
        </div>



      </div><!--end conteiner-->
        

<?php
  if (!empty($_POST['cadastroPalestra'])){
   // print "<script>alert(".$_POST['dataF'].")</script>";
  //  print "<script>alert(".$_POST['e'].")</script>";
    //print "<script>alert(".$_POST['r'].")</script>";

   print $_POST['e'];
    print "<SCRIPT LANGUAGE=\"JavaScript\" TYPE=\"text/javascript\">

alert (".$_POST['r'].")

</SCRIPT>";
  }
?>


    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
  </body>
</html>
                    