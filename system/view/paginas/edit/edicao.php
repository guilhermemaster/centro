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
      Criado em: 24/04/2015
      Autor: Guilherme Barbosa Lima
      Finalidade: Partes do sistema G_Index v2.0.0
      */
      ?>

        <div class="panel panel-default">
          <div class="panel-heading">Edição</div>
          <div class="panel-body">
           
              <form action="edit_home.php" method="post">
              <button type="submit" class="btn btn-info lado_lado">HOME</button>
              </form>

              <form action="edit_emecam.php" method="post">
              <button type="submit" class="btn btn-info lado_lado">EMECAM</button>
              </form>

               <form action="cadastro_fornecedor.php" method="post">
              <button type="submit" class="btn btn-info lado_lado">MOCIDADE ESPÍRITA</button>
              </form>


          </div>
        </div>



      </div><!--end conteiner-->
        




    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
  </body>
</html>
                    