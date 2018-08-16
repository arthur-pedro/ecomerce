<?php
	
	session_start();
	require("conexao_mysql.php");

	

	$btn_form = $_POST['btn_form'];


	$tabela = "usuarios";
	/*lembrar de colcoar os campos no array depois*/
	$campos = "";
	
	if($btn_form == 'btn_login'){

		// LOGIN
		$nome_usuario = $_POST['nome'];
		$senha_usuario = $_POST['senha'];

		echo "lala";
		die;


		// X---------------------------------LOGIN-------------------------------X

		if(isset($nome_usuario) && isset($senha_usuario)){
			$query_pedidos = "SELECT nome_usuario, admin FROM $tabela WHERE nome_usuario = '$nome_usuario' AND senha_usuario = '$senha_usuario'";
		}else{
			echo json_encode("Nome ou senha null");
		}
		
		if(isset($query_pedidos)){
			$result = $conn->query($query_pedidos);	

			if(isset($result)){
				$qtd_row =  mysqli_num_rows($result);
				$row = $result->fetch_assoc();
			}
		}else{
			echo json_encode("Query invalida");
		}
		
		
		
		$_SESSION['nome_usuario'] = $row['nome_usuario'];
		/*echo $_SESSION['nome_usuario'];*/
		
		if($qtd_row == 1){

			// if($row['admin'] == 'true'){

			// }

			$_SESSION['usuario_logado'] = $_SESSION['nome_usuario'];

			

			header("Location: ../adm_area.php"); 	
		}else{
			echo json_encode("Usuario nao existe | senha errada");
		}
		// X---------------------------------LOGIN-------------------------------X

	}else if($btn_form == 'btn_cadastro'){

		// LOGIN
		$nome_usuario = $_POST['nome'];
		$senha_usuario = $_POST['senha'];

		// CADASTRO
		$confirma_senha = $_POST['confirma_senha'];
		$email_usuario = $_POST['email'];
		
		// X---------------------------------CADASTRO----------------------------X

		if(isset($nome_usuario) && isset($senha_usuario) && isset($email_usuario) && isset($confirma_senha)){
			$query_pedidos = "INSERT INTO $tabela (`nome_usuario`, `email_usuario`, `senha_usuario`) VALUES ('$nome_usuario','$email_usuario', '$senha_usuario')";
		}else{
			echo json_encode("Dados null");
		}
		
		if(isset($query_pedidos)){
			echo $query_pedidos;
			$result = $conn->query($query_pedidos);	
		}else{
			echo json_encode("Query invalida");
		}
		
		// X---------------------------------CADASTRO----------------------------X
	}

?>