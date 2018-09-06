<?php

	require "C:/Program Files/NetMake/v9/wwwroot/ecomerce/v1.1/lib/class/util/util_class.php";
	$utilClass = new Util();

	$utilClass->callClassByFolderName('connectionMYSQL');
	$utilClass->callClassByFolderName('product');
	$utilClass->callClassByFolderName('shoppingCart');

	$product = $_POST['product'];

	if(!is_null($product)){
		
		$query_selectItem = "SELECT `nome_produto`, `preco_produto`, `descricao_produto` FROM `produto` WHERE `nome_produto` = '$product'";
		$conexao = new MyDatabase();
		$conn = $conexao->connectPDO();
		$stmt = $conn->prepare($query_selectItem);
		if(!$stmt->execute()){
		    echo '<pre>';
		    print_r($stmt->errorInfo());
		}else{
			$result = $stmt->fetch(PDO::FETCH_ASSOC);
			$item = new Product($result['nome_produto'], $result['preco_produto'], $result['descricao_produto']);
			$shoppingCart = new ShoppingCart();
			$shoppingCart->addItem($item);
		}	
	}
	
?>