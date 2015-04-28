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
          <div class="panel-heading">Palestras Cadastradas</div>
          <div class="panel-body">
           <table class="table table-hover">
            <tr>
              <th>Data</th>
              <th>Horário</th>
              <th>Descrição</th>
              <th>Excluir</th>
             </tr>
       
             <?php
              include "../../../model/geral_class.php";
              $ex=new geralSys();
              $aux=$ex->selectPalestra();
              $aux->execute();



              while($linha=$aux->fetch(PDO::FETCH_ASSOC)){
                $date = new DateTime($linha['data']);
              print"  <tr>

              <td>".$date->format('d/m/Y')."</td>
              <td>".$linha['horario']."</td>
              <td>".$linha['Descricao']."</td>
              <td>
                <form method=\"post\" action=\"../../../controle/controle_geral.php\"> 
                  <input type=\"hidden\" name=\"idPalestra\" value=".$linha['horario']." />
                  <input type=\"hidden\" name=\"excPalestra\" value=\"ok\" />
                  <button type=\"submit\" class=\"btn btn-danger\">Excluir</button>
                </form> 
              </td>
            </tr>";

              }
              
              
              

              
              ?> 



          </table> 


          </div>
        </div>



      </div><!--end conteiner-->
        




    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
  </body>
</html>
                    