<?php

	session_start();

	require("conexao_mysql.php");

	// $produto = 'Banner';

	// $query = "SELECT nome, preco, descricao FROM servicos WHERE id = 1";

	// $result = $conn->query($query);

	// foreach ($result as $key) {
	// 	foreach ($key as  $value) {
	// 		echo $value[];
	// 	}
	// }
	
	//Tratamento de variáveis
	if(isset($_POST['product'])){

		$_SESSION['carrinho'][] = $_POST['product'];

		if(isset($_SESSION['carrinho'])){

        	$_SESSION['qtd_produtos'] = count($_SESSION['carrinho']);

	    }else{

	        $_SESSION['qtd_produtos'] = 0;

	    }
	}else{
		echo "Carrinho vazio";
	}
	



	
	
 	// echo var_dump($_SESSION['carrinho']);

	// $query = "SELECT * FROM servicos WHERE nome = '$btn_1'";

	// $result = $conn->query($query);

	// $row = $result->fetch_assoc();
	
	// $_SESSION['item'] = $row['nome'];

	// session_destroy();

	// header('Location: ../index.php')

	// printf($row['nome']);
	// print($result);


	
?>