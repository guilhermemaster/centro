<?php
/*
	Criado em: 28/02/2015
	Autor: Guilherme Barbosa Lima
	Finalidade: Partes do sistema G_Index v2.0.0
*/

	    error_reporting(E_WARNING);
		ini_set(“display_errors”, 1 );
		$conexao = mysql_connect("localhost", "root", "") or die ("<script>alert(\"Erro ao Conectar ao Banco de Dados!\");</script>");
		$db = mysql_select_db("g_indexsystem") or die ("<script>alert(\"Erro ao selecionar o Banco de Dados!\");</script>"); 

		class configuration_defult{
			/**
			* função de destruição da sessão iniciada
			*
			* @return void
			* @author Guilherme Barbosa Lima
			**/
			function destry_sessao(){
				session_start("administracao");
				unset($_SESSION["user"]);
				session_destroy();
				header("Location:login.php");
			}
			 /**
			 * faz a validação se o usuário está logado, se n faz o refresh
			 * nivel 1 de segurança
			 *
			 * @return void
			 * @author Guilherme Barbosa Lima
			 **/
			function security($key){
				 if(empty($key)){
			     header("Location:login.php");
			     }

			}

			/**
			 * Faz a validação como a criptografia MD5, nivel de segirança 2. 
			 *
			 * @return void
			 * @author Guilherme Barbosa Lima
			 **/
			function security_md5($md5, $key){
				$aux_md5=md5($key);
				if($aux_md5!=$md5){
				header("Location:login.php");		
				}
			}

			/**
			 * Execução da query no bd, nas primeiras linhas escondes erros que o servidor
			 *dar em relação a PDO
			 * @return void
			 * @author Guilherme Barbosa Lima
			 **/
			function executcrud($sql){
			setlocale(LC_ALL, 'pt_BR.utf-8');
			if (mysql_query($sql)){
			print "<script>alert(\"Operação realizada com Sucesso!\");</script>";
			}else{
			print "<script>alert(\"Erro ao realizar à operação!\");</script>";
				}
			}

			/**
			 * Função de troca de data do modelo americano para o brasileiro
			 *
			 * @return retorna a data trocada (String)
			 * @author Guilherme Barbosa Lima
			 **/
			function troca_data($data){
			$str = $data;
			$arr1 = str_split($str);
			$aux=$arr1[0];
			$arr1[0]=$arr1[8];
			$arr1[8]=$aux;
			$aux=$arr1[1];
			$arr1[1]=$arr1[9];
			$arr1[9]=$aux;
			$aux=$arr1[2];
			$arr1[2]=$arr1[7];
			$arr1[7]=$aux;
			$aux=$arr1[3];
			$arr1[3]=$arr1[5];
			$arr1[5]=$aux;
			$aux=$arr1[4];
			$arr1[4]=$arr1[6];
			$arr1[6]=$aux;
			$aux=$arr1[5];
			$arr1[5]=$arr1[6];
			$arr1[6]=$aux;
			$aux=$arr1[6];
			$arr1[6]=$arr1[9];
			$arr1[9]=$aux;
			$aux=$arr1[6];
			$arr1[6]=$arr1[8];
			$arr1[8]=$aux;
			$aux=$arr1[7];
			$arr1[7]=$arr1[8];
			$arr1[8]=$aux;
			$segun = implode("", $arr1);
			return $segun;
			}



		}
?>