<?php
	
	session_start();
	require("conexao_mysql.php");

	$nome_usuario = $_POST['nome'];
	$senha_usuario = $_POST['senha'];


	$tabela = "usuarios";
	/*lembrar de colcoar os campos no array depois*/
	$campos = "";
	$query_pedidos = "SELECT nome_usuario FROM $tabela WHERE nome_usuario = '$nome_usuario' AND senha_usuario = '$senha_usuario'";

	
	$result = $conn->query($query_pedidos);
	$qtd_row =  mysqli_num_rows($result);
	$row = $result->fetch_assoc();
	
	$_SESSION['nome_usuario'] = $row['nome_usuario'];
	/*echo $_SESSION['nome_usuario'];*/
	
	if($qtd_row == 1){
		header("Location: ../adm_area.php"); 	
	}else{
		echo json_encode("Falha");
	}	

?>