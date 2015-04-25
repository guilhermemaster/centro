<?php
	class funcaogeral{

		 /**
		 * função de troca de data, para o modelo brasileiro
		 *
		 * @return void
		 * @author guilherme barbosa lima
		 **/
		 public function troca_data($data){
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
			print $segun;
		}

		/**
		 * validação de cpf
		 *
		 * @return boolean
		 * @author guilherme barbosa lima
		 **/
	public function validaCPF( $cpf = false ) {
	// Exemplo de CPF: 025.462.884-23
	
	/**
	 * Multiplica dígitos vezes posições 
	 *
	 * @param string $digitos Os digitos desejados
	 * @param int $posicoes A posição que vai iniciar a regressão
	 * @param int $soma_digitos A soma das multiplicações entre posições e digitos
	 * @return int Os digitos enviados concatenados com o último dígito
	 *
	 */
	function calc_digitos_posicoes( $digitos, $posicoes = 10, $soma_digitos = 0 ) {
		// Faz a soma dos digitos com a posição
		// Ex. para 10 posições: 
		//   0    2    5    4    6    2    8    8   4
		// x10   x9   x8   x7   x6   x5   x4   x3  x2
		// 	 0 + 18 + 40 + 28 + 36 + 10 + 32 + 24 + 8 = 196
		for ( $i = 0; $i < strlen( $digitos ); $i++  ) {
			$soma_digitos = $soma_digitos + ( $digitos[$i] * $posicoes );
			$posicoes--;
		}

		// Captura o resto da divisão entre $soma_digitos dividido por 11
		// Ex.: 196 % 11 = 9
		$soma_digitos = $soma_digitos % 11;

		// Verifica se $soma_digitos é menor que 2
		if ( $soma_digitos < 2 ) {
			// $soma_digitos agora será zero
			$soma_digitos = 0;
		} else {
			// Se for maior que 2, o resultado é 11 menos $soma_digitos
			// Ex.: 11 - 9 = 2
			// Nosso dígito procurado é 2
			$soma_digitos = 11 - $soma_digitos;
		}

		// Concatena mais um digito aos primeiro nove digitos
		// Ex.: 025462884 + 2 = 0254628842
		$cpf = $digitos . $soma_digitos;
		
		// Retorna
		return $cpf;
	}
	
	// Verifica se o CPF foi enviado
	if ( ! $cpf ) {
		return false;
	}

	// Remove tudo que não é número do CPF
	// Ex.: 025.462.884-23 = 02546288423
	$cpf = preg_replace( '/[^0-9]/is', '', $cpf );

	// Verifica se o CPF tem 11 caracteres
	// Ex.: 02546288423 = 11 números
	if ( strlen( $cpf ) != 11 ) {
		return false;
	}	

	// Captura os 9 primeiros dígitos do CPF
	// Ex.: 02546288423 = 025462884
	$digitos = substr($cpf, 0, 9);
	
	// Faz o cálculo dos 9 primeiros dígitos do CPF para obter o primeiro dígito
	$novo_cpf = calc_digitos_posicoes( $digitos );
	
	// Faz o cálculo dos 10 digitos do CPF para obter o último dígito
	$novo_cpf = calc_digitos_posicoes( $novo_cpf, 11 );
	
	// Verifica se o novo CPF gerado é identico ao CPF enviado
	if ( $novo_cpf === $cpf ) {
		// CPF válido
		return true;
	} else {
		// CPF inválido
		return false;
	}
}//end validaCPF

		/**
		 * validação de cnpj
		 *
		 * @return boolean
		 * @author guilherme barbosa lima
		 **/
	public	function validaCNPJ ( $cnpj ) {
// Deixa o CNPJ com apenas números
	$cnpj = preg_replace( '/[^0-9]/', '', $cnpj );
	
	// Garante que o CNPJ é uma string
	$cnpj = (string)$cnpj;
	
	// O valor original
	$cnpj_original = $cnpj;
	
	// Captura os primeiros 12 números do CNPJ
	$primeiros_numeros_cnpj = substr( $cnpj, 0, 12 );
	
	/**
	 * Multiplicação do CNPJ
	 *
	 * @param string $cnpj Os digitos do CNPJ
	 * @param int $posicoes A posição que vai iniciar a regressão
	 * @return int O
	 *
	 */
	 function multiplica_cnpj( $cnpj, $posicao = 5 ) {
		// Variável para o cálculo
		$calculo = 0;
		
		// Laço para percorrer os item do cnpj
		for ( $i = 0; $i < strlen( $cnpj ); $i++ ) {
			// Cálculo mais posição do CNPJ * a posição
			$calculo = $calculo + ( $cnpj[$i] * $posicao );
			
			// Decrementa a posição a cada volta do laço
			$posicao--;
			
			// Se a posição for menor que 2, ela se torna 9
			if ( $posicao < 2 ) {
				$posicao = 9;
			}
		}
		// Retorna o cálculo
		return $calculo;
	}
	
	// Faz o primeiro cálculo
	$primeiro_calculo = multiplica_cnpj( $primeiros_numeros_cnpj );
	
	// Se o resto da divisão entre o primeiro cálculo e 11 for menor que 2, o primeiro
	// Dígito é zero (0), caso contrário é 11 - o resto da divisão entre o cálculo e 11
	$primeiro_digito = ( $primeiro_calculo % 11 ) < 2 ? 0 :  11 - ( $primeiro_calculo % 11 );
	
	// Concatena o primeiro dígito nos 12 primeiros números do CNPJ
	// Agora temos 13 números aqui
	$primeiros_numeros_cnpj .= $primeiro_digito;

	// O segundo cálculo é a mesma coisa do primeiro, porém, começa na posição 6
	$segundo_calculo = multiplica_cnpj( $primeiros_numeros_cnpj, 6 );
	$segundo_digito = ( $segundo_calculo % 11 ) < 2 ? 0 :  11 - ( $segundo_calculo % 11 );
	
	// Concatena o segundo dígito ao CNPJ
	$cnpj = $primeiros_numeros_cnpj . $segundo_digito;
	
	// Verifica se o CNPJ gerado é idêntico ao enviado
	if ( $cnpj === $cnpj_original ) {
		return true;
	}
		}//validaCNPJ

		/**
		 * validação do campo cpf e cnpj dependendo da quantidade de string.
		 *
		 * @return void
		 * @author guilherme barbosa lima
		 **/
	function cpfcnpj($id){
		     
              if (strlen($id)==11){

                  if(!$this->validaCPF($id)){
                  print "<script type=\"text/javascript\">alert(\"CPF Inválido!\");</script>";
                 }

               } else{

                      if(!$this->validaCNPJ($id)){
                     print "<script type=\"text/javascript\">alert(\"CNPJ Inválido!\");</script>";
                    }

                  }   
          

      }//end cpfcnpj

	}//end classe


?>