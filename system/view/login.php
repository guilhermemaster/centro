<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>G_Index System</title>


<link rel="shortcut icon" href="img/icone.ico">
<link rel="stylesheet" href="css/style_login.css" type="text/css" />
</head>
<body>

<div id="center">
  <div id="log">
    <p title="nome"><img src="img_system/logo.png" width="300" /></p></br>
      <form action="login.php" method="post">
      
        <p title="processo">Login:<input type="text" name="login" />
        </p></br>
        <p title="processo">Senha:<input type="password" name="senha" />
          </p></br>
        <p title="processo">
         <input name="enviar" type="submit" value="Enviar" />
         

          <input name="button" type="reset"  value="Limpar"/>
        </p>
      </form>
    </div>
    
  <div id="left">
    	<img src="img_system/cadeado.png" width="150"  height="150" />
       
  </div>
    
</div>


<?php
    /*
      Criado em: 01/03/2015
      Autor: Guilherme Barbosa Lima
      Finalidade: Partes do sistema G_Index v2.0.0
    */

    include_once "../model/config/configuration_ge.php";
   

    if (! empty($_POST['login'])){
        
      $nome =strtoupper($_POST['login']);
      $senha =strtoupper( $_POST['senha']);

          
      $sql="SELECT * FROM configuracoes";
      $resultado = mysql_query($sql) or die ("Não é possivel realiza a consuta");
      if(@mysql_num_rows($resultado)==0) die ("Nenhum registro encontrado");
          
          while($linha=mysql_fetch_array($resultado)) {
            if( $nome == $linha['nome'] && $senha == $linha['senha']){
              $iduser=$linha['idConfiguracoes'];
              $nomesessao=$linha['nome'];

              $validador="valido";
              break;
            }//fim do while
      }
      if( $validador=="valido"){
        session_start("administracao");
        $_SESSION["user"]=$nomesessao;
        $_SESSION['id']=$iduser;
        $_SESSION["md5"]=md5($nomesessao);
        print "<meta http-equiv=\"refresh\" content=\"3;url=leyout.php\">";
      }else{
        print "<meta http-equiv=\"refresh\" content=\"3;url=acesso_negado.php\">";
        }
   }//fim do empty

?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
</body>
</html>