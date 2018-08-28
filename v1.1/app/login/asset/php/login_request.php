<?php
	
	session_start();
	/*require("../../../../lib/class/conexao/conexao_mysql.php");*/
	include_once("../../../../lib/class/util/util_class.php");

	$util = new Util();

	$nome_usuario = $_POST['nome'];
	$senha_usuario = $_POST['senha'];

	// $email_usuario = $_POST['email'];
	// $confirma_usuario = $_POST['confirma-senha'];

	$btn_form = $_POST['btn_login'];

	$tabela = "usuarios";
	/*lembrar de colcoar os campos no array depois*/
	$campos = "";


	// X---------------------------------LOGIN-------------------------------X
	
	if($btn_form == "login"){

		if($nome_usuario == '' || $senha_usuario == ''){
			echo "nullField";
		}else{
			$util->authenticationUser($nome_usuario, $senha_usuario);
		}

		

	}else if($btn_form == 'btn_cadastro') {
		
		/*$email_usuario = $_POST['email'];
		$confirma_usuario = $_POST['confirma-senha'];
*/
		if($nome_usuario != NULL || $senha_usuario != NULL || $email_usuario != NULL || $confirma_senha != NULL){
			
			$util->createUser($nome_usuario, $email_usuario, $senha_usuario);
					
			}else{
				echo "Query invalida";
			}

		}else{
			echo "nullField";
		}
		
	// 	// X---------------------------------CADASTRO----------------------------X
	
	

?>