<?php
	
	session_start();
	require("conexao_mysql.php");



	
	
	
	// if($btn_form == 'btn_login'){

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
			
			$query_pedidos = "SELECT nome_usuario, admin FROM $tabela WHERE nome_usuario = '$nome_usuario' AND senha_usuario = '$senha_usuario'";


			if($nome_usuario == '\'' || $senha_usuario == '\''){
				
				echo "erroQuery";
				
			
			}else{

				$result = $conn->query($query_pedidos);	

				if(isset($result)){
					$qtd_row =  mysqli_num_rows($result);
					$row = $result->fetch_assoc();
				}
				if($qtd_row == 1){
					if($row['admin'] == 'true'){
						$_SESSION['usuario_logado'] = $nome_usuario;
						echo "logado";
					}
				}else{
					echo "nullRegister";
				}
			}

		}
	}else if($btn_form == 'btn_cadastro') {
		// 	// X---------------------------------CADASTRO----------------------------X

		if($nome_usuario != NULL || $senha_usuario != NULL || $email_usuario != NULL || $confirma_senha != NULL){
			$query_pedidos = "INSERT INTO $tabela (`nome_usuario`, `email_usuario`, `senha_usuario`) VALUES ('$nome_usuario','$email_usuario', '$senha_usuario')";

			if(isset($query_pedidos)){
				echo $query_pedidos;
				$result = $conn->query($query_pedidos);

				echo "cadastrado";
					
			}else{
				echo "Query invalida";
			}

		}else{
			echo "nullField";
		}
		
	// 	// X---------------------------------CADASTRO----------------------------X
	// }
	}
	

		// X---------------------------------LOGIN-------------------------------X

	// }else if(){

	// 	// LOGIN
	// 	$nome_usuario = $_POST['nome'];
	// 	$senha_usuario = $_POST['senha'];

	// 	// CADASTRO
	// 	$confirma_senha = $_POST['confirma_senha'];
	// 	$email_usuario = $_POST['email'];
		
	

?>