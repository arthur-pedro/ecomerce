<?php

	session_start();

	require("conexao_mysql.php");

	

	//$btn_1 = $_POST['btn_1'];
	// echo $_GET['vetor'];
	// echo 'ok';
	$_SESSION['carrinho'][] = $_POST['product'];
	
 	// echo var_dump($_SESSION['carrinho']);

	// $query = "SELECT * FROM servicos WHERE nome = '$btn_1'";

	// $result = $conn->query($query);

	// $row = $result->fetch_assoc();
	
	// $_SESSION['item'] = $row['nome'];



	// header('Location: ../index.php')

	// printf($row['nome']);
	// print($result);


	
?>