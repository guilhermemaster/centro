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
          <div class="panel-heading">Cadastro de Clientes</div>
          <div class="panel-body">
            <div class="row">
             <div class="col-md-4">
                <form method="post" action="cadastro_clientes.php" > 

              
                <div class="form-group">
                  <label for="exampleInputEmail1">Nome de Usuário *</label>
                  <input type="text" class="form-control" id="exampleInputEmail1" placeholder="Nome usuário" name="nome">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Tipo pessoa</label>
                  <select class="form-control" name="tipoPessoa">
                    <option>FÍSICA</option>
                    <option>JURÍDICA</option>
                  </select>
                </div>
              
                <div class="form-group">
                  <label for="exampleInputPassword1">CPF/CNPJ *</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="CPF/CNPJ válido" name="cpfcnpj" onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;" >
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">RG *</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="RG" name="rg"  onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Data de nascimento *</label>
                  <input type="date" class="form-control" id="exampleInputPassword1" placeholder="Data de nascimento" name="dataNascimento">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Município</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Município" name="municipio">
                </div>

                <input name="modify" type="hidden" value="yes"  />
                <button type="submit" class="btn btn-default">Enviar</button>
              
              
             </div><!--END PARTE 1 DO CADASTRO-->

             <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputPassword1">Bairro</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Bairro" name="bairro">
                </div> 

                
                <div class="form-group">
                  <label for="exampleInputPassword1">Endereço</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Endereço" name="endereco">
                </div> 

                <div class="form-group">
                  <label for="exampleInputPassword1">CEP</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="CEP" name="cep"  onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">UF</label>
                  <select class="form-control" name="uf">
                    <option>AC</option>
                  </select>
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Estado</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Estado" name="estado">
                </div> 

                <div class="form-group">
                  <label for="exampleInputPassword1">Telefone 1</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Telefone 1" name="telefone_1"  onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
                </div>


             </div><!--END PARTE 2 DO FORMULÁRIO-->

              <div class="col-md-4">
                <div class="form-group">
                  <label for="exampleInputPassword1">Telefone 2</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Telefone 2" name="telefone_2"  onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
                </div>

                <div class="form-group">
                  <label for="exampleInputPassword1">Email</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Email válido" name="email">
                </div> 
                   <label  for="exampleInputPassword1"><p align="center">Vinculo pessoal</p></label>
                
                <div class="form-group">
                  <label for="exampleInputPassword1">Nome</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Nome pessoa veinculada" name="nomeVinculo">
                </div> 

                 <div class="form-group">
                  <label for="exampleInputPassword1">Telefone</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Telefone da pessoa veinculada" name="telefoneVinculo"  onkeypress="if (!isNaN(String.fromCharCode(window.event.keyCode))) return true; else return false;">
                </div>

                 <div class="form-group">
                  <label for="exampleInputPassword1">Tipo de vinculo</label>
                  <input type="text" class="form-control" id="exampleInputPassword1" placeholder="Tipo de vinculo" name="tipoVinculo">
                </div> 

             </div><!--END PARTE 3 DO FORMULÁRIO-->

              </form>        
                </div><!--END ROW-->
             </div><!--END CONTEUDO PANEL-->
          </div>
        </div>



      </div><!--end conteiner-->
        
      <?php
        include_once "../../config/defull_validacao.php";

        $dellGeral=new funcaogeral();
        if (!empty($_POST['cpfcnpj'])){
          $dellGeral->cpfcnpj($_POST['cpfcnpj']);

          
        }
       
      ?>



    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
  </body>
</html>
                    